<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyProductRequest;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\StoreServiceFeatureRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Requests\UpdateServiceFeatureRequest;
use App\Models\Article;
use App\Models\Category;
use App\Models\Product;
use App\Models\Service;
use App\Models\ServiceFeature;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('article_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $articles = Article::with(['media'])->get();

        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        abort_if(Gate::denies('article_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.articles.create');
    }

    public function store(StoreArticleRequest $request)
    {
        $article = Article::create($request->all());
//        dd($article);

        if ($request->input('image', false)) {
            $article->addMedia(public_path('uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }
        if ($request->input('author_image', false)) {
            $article->addMedia(public_path('uploads/' . basename($request->input('author_image'))))->toMediaCollection('author_image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $article->id]);
        }

        return redirect()->route('admin.articles.index');
    }

    public function edit(Article $article)
    {
        abort_if(Gate::denies('article_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');


        return view('admin.articles.edit', compact('article'));
    }

    public function update(UpdateArticleRequest $request, Article $article)
    {
       $article->update($request->all());

        if ($request->input('image', false)) {
            if (!$article->image || $request->input('image') !== $article->image->file_name) {
                if ($article->image) {
                    $article->image->delete();
                }
                $article->addMedia(public_path('uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($article->image) {
            $article->image->delete();
        }
        if ($request->input('author_image', false)) {
            if (!$article->author_image || $request->input('author_image') !== $article->author_image->file_name) {
                if ($article->author_image) {
                    $article->author_image->delete();
                }
                $article->addMedia(public_path('uploads/' . basename($request->input('author_image'))))->toMediaCollection('author_image');
            }
        } elseif ($article->author_image) {
            $article->author_image->delete();
        }

        return redirect()->route('admin.articles.index');
    }

    public function show(Article $article)
    {
        abort_if(Gate::denies('article_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.articles.show', compact('article'));
    }

    public function destroy(Article $article)
    {
        abort_if(Gate::denies('article_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $article->delete();

        return back();
    }

    public function massDestroy(MassDestroyProductRequest $request)
    {
        Article::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('article_create') && Gate::denies('article_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model = new Article();
        $model->id = $request->input('crud_id', 0);
        $model->exists = true;
        $media = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
