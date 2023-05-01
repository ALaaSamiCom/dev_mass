<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
            'team'                     => 'Team',
            'team_helper'              => ' ',
        ],
    ],
    'team' => [
        'title'          => 'Teams',
        'title_singular' => 'Team',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'owner'             => 'Owner',
            'owner_helper'      => ' ',
        ],
    ],
    'expenseManagement' => [
        'title'          => 'Expense Management',
        'title_singular' => 'Expense Management',
    ],
    'expenseCategory' => [
        'title'          => 'Expense Categories',
        'title_singular' => 'Expense Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'incomeCategory' => [
        'title'          => 'Income categories',
        'title_singular' => 'Income Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'expense' => [
        'title'          => 'Expenses',
        'title_singular' => 'Expense',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => ' ',
            'expense_category'        => 'Expense Category',
            'expense_category_helper' => ' ',
            'entry_date'              => 'Entry Date',
            'entry_date_helper'       => ' ',
            'amount'                  => 'Amount',
            'amount_helper'           => ' ',
            'description'             => 'Description',
            'description_helper'      => ' ',
            'created_at'              => 'Created at',
            'created_at_helper'       => ' ',
            'updated_at'              => 'Updated At',
            'updated_at_helper'       => ' ',
            'deleted_at'              => 'Deleted At',
            'deleted_at_helper'       => ' ',
        ],
    ],
    'income' => [
        'title'          => 'Income',
        'title_singular' => 'Income',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'income_category'        => 'Income Category',
            'income_category_helper' => ' ',
            'entry_date'             => 'Entry Date',
            'entry_date_helper'      => ' ',
            'amount'                 => 'Amount',
            'amount_helper'          => ' ',
            'description'            => 'Description',
            'description_helper'     => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated At',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted At',
            'deleted_at_helper'      => ' ',
        ],
    ],
    'expenseReport' => [
        'title'          => 'Monthly report',
        'title_singular' => 'Monthly report',
        'reports'        => [
            'title'             => 'Reports',
            'title_singular'    => 'Report',
            'incomeReport'      => 'Incomes report',
            'incomeByCategory'  => 'Income by category',
            'expenseByCategory' => 'Expense by category',
            'income'            => 'Income',
            'expense'           => 'Expense',
            'profit'            => 'Profit',
        ],
    ],
    'taskManagement' => [
        'title'          => 'Task management',
        'title_singular' => 'Task management',
    ],
    'taskStatus' => [
        'title'          => 'Statuses',
        'title_singular' => 'Status',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'taskTag' => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'task' => [
        'title'          => 'Tasks',
        'title_singular' => 'Task',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'status'             => 'Status',
            'status_helper'      => ' ',
            'tag'                => 'Tags',
            'tag_helper'         => ' ',
            'attachment'         => 'Attachment',
            'attachment_helper'  => ' ',
            'due_date'           => 'Due date',
            'due_date_helper'    => ' ',
            'assigned_to'        => 'Assigned to',
            'assigned_to_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'tasksCalendar' => [
        'title'          => 'Calendar',
        'title_singular' => 'Calendar',
    ],
    'clientManagementSetting' => [
        'title'          => 'Client management settings',
        'title_singular' => 'Client management settings',
    ],
    'currency' => [
        'title'          => 'Currencies',
        'title_singular' => 'Currency',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'name'                 => 'Name',
            'name_helper'          => ' ',
            'code'                 => 'Currency code',
            'code_helper'          => ' ',
            'main_currency'        => 'Main currency',
            'main_currency_helper' => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated At',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted At',
            'deleted_at_helper'    => ' ',
        ],
    ],
    'transactionType' => [
        'title'          => 'Transaction types',
        'title_singular' => 'Transaction type',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'incomeSource' => [
        'title'          => 'Income sources',
        'title_singular' => 'Income source',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'fee_percent'        => 'Fee Percent',
            'fee_percent_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'clientStatus' => [
        'title'          => 'Client statuses',
        'title_singular' => 'Client status',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'projectStatus' => [
        'title'          => 'Project statuses',
        'title_singular' => 'Project status',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'clientManagement' => [
        'title'          => 'Client management',
        'title_singular' => 'Client management',
    ],
    'client' => [
        'title'          => 'Clients',
        'title_singular' => 'Client',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'first_name'        => 'First name',
            'first_name_helper' => ' ',
            'last_name'         => 'Last name',
            'last_name_helper'  => ' ',
            'company'           => 'Company',
            'company_helper'    => ' ',
            'email'             => 'Email',
            'email_helper'      => ' ',
            'phone'             => 'Phone',
            'phone_helper'      => ' ',
            'website'           => 'Website',
            'website_helper'    => ' ',
            'skype'             => 'Skype',
            'skype_helper'      => ' ',
            'country'           => 'Country',
            'country_helper'    => ' ',
            'status'            => 'Client Status',
            'status_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'project' => [
        'title'          => 'Projects',
        'title_singular' => 'Project',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'client'             => 'Client',
            'client_helper'      => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'start_date'         => 'Start Date',
            'start_date_helper'  => ' ',
            'budget'             => 'Budget',
            'budget_helper'      => ' ',
            'status'             => 'Project Status',
            'status_helper'      => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'note' => [
        'title'          => 'Notes',
        'title_singular' => 'Note',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'project'           => 'Project',
            'project_helper'    => ' ',
            'note_text'         => 'Note Text',
            'note_text_helper'  => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'document' => [
        'title'          => 'Documents',
        'title_singular' => 'Document',
        'fields'         => [
            'id'                   => 'ID',
            'id_helper'            => ' ',
            'project'              => 'Project',
            'project_helper'       => ' ',
            'document_file'        => 'File',
            'document_file_helper' => ' ',
            'name'                 => 'Document Name',
            'name_helper'          => ' ',
            'description'          => 'Description',
            'description_helper'   => ' ',
            'created_at'           => 'Created at',
            'created_at_helper'    => ' ',
            'updated_at'           => 'Updated At',
            'updated_at_helper'    => ' ',
            'deleted_at'           => 'Deleted At',
            'deleted_at_helper'    => ' ',
        ],
    ],
    'transaction' => [
        'title'          => 'Transactions',
        'title_singular' => 'Transaction',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => ' ',
            'project'                 => 'Project',
            'project_helper'          => ' ',
            'transaction_type'        => 'Transaction Type',
            'transaction_type_helper' => ' ',
            'income_source'           => 'Income Source',
            'income_source_helper'    => ' ',
            'amount'                  => 'Amount',
            'amount_helper'           => ' ',
            'currency'                => 'Currency',
            'currency_helper'         => ' ',
            'transaction_date'        => 'Transaction Date',
            'transaction_date_helper' => ' ',
            'name'                    => 'Name',
            'name_helper'             => ' ',
            'description'             => 'Description',
            'description_helper'      => ' ',
            'created_at'              => 'Created at',
            'created_at_helper'       => ' ',
            'updated_at'              => 'Updated At',
            'updated_at_helper'       => ' ',
            'deleted_at'              => 'Deleted At',
            'deleted_at_helper'       => ' ',
        ],
    ],
    'clientReport' => [
        'title'          => 'Reports',
        'title_singular' => 'Report',
        'reports'        => [
            'month'       => 'Month',
            'income'      => 'Income',
            'expenses'    => 'Expenses',
            'fees'        => 'Fees',
            'total'       => 'Total',
            'allProjects' => 'All projects',
        ],
    ],
    'mainMenu' => [
        'title'          => 'Main Menu',
        'title_singular' => 'Main Menu',
    ],
    'setting' => [
        'title'          => 'Settings',
        'title_singular' => 'Setting',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'title_en'              => 'Title En',
            'title_en_helper'       => ' ',
            'title_ar'              => 'Title Ar',
            'title_ar_helper'       => ' ',
            'logo'                  => 'Logo',
            'logo_helper'           => ' ',
            'description_en'        => 'Description En',
            'description_en_helper' => ' ',
            'description_ar'        => 'Description Ar',
            'description_ar_helper' => ' ',
            'keywords_en'           => 'Keywords En',
            'keywords_en_helper'    => ' ',
            'keywords_ar'           => 'Keywords Ar',
            'keywords_ar_helper'    => ' ',
            'email'                 => 'Email',
            'email_helper'          => ' ',
            'phone'                 => 'Phone',
            'phone_helper'          => ' ',
            'website'               => 'Website',
            'website_helper'        => ' ',
            'latitudes'             => 'Latitudes',
            'latitudes_helper'      => ' ',
            'meridians'             => 'Meridians',
            'meridians_helper'      => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
        ],
    ],
    'socialLink' => [
        'title'          => 'Social Links',
        'title_singular' => 'Social Link',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'value'             => 'Value',
            'value_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
        ],
    ],
    'slider' => [
        'title'          => 'Slider',
        'title_singular' => 'Slider',
        'fields'         => [
            'id'                          => 'ID',
            'id_helper'                   => ' ',
            'title_en'                    => 'Title En',
            'title_en_helper'             => ' ',
            'title_ar'                    => 'Title Ar',
            'title_ar_helper'             => ' ',
            'description_en'              => 'Description En',
            'description_en_helper'       => ' ',
            'description_ar'              => 'Description Ar',
            'description_ar_helper'       => ' ',
            'image'                       => 'Image',
            'image_helper'                => ' ',
            'short_description_en'        => 'Short Description En',
            'short_description_en_helper' => ' ',
            'short_description_ar'        => 'Short Description Ar',
            'short_description_ar_helper' => ' ',
            'created_at'                  => 'Created at',
            'created_at_helper'           => ' ',
            'updated_at'                  => 'Updated at',
            'updated_at_helper'           => ' ',
            'deleted_at'                  => 'Deleted at',
            'deleted_at_helper'           => ' ',
            'link'                        => 'Link',
            'link_helper'                 => ' ',
        ],
    ],
    'pageIteme' => [
        'title'          => 'Page& Itemes',
        'title_singular' => 'Page& Iteme',
    ],
    'page' => [
        'title'          => 'Pages',
        'title_singular' => 'Page',
        'fields'         => [
            'id'                          => 'ID',
            'id_helper'                   => ' ',
            'image'                       => 'Image',
            'image_helper'                => ' ',
            'keywords_en'                 => 'Keywords En',
            'keywords_en_helper'          => ' ',
            'keywords_ar'                 => 'Keywords Ar',
            'keywords_ar_helper'          => ' ',
            'title_en'                    => 'Title En',
            'title_en_helper'             => ' ',
            'title_ar'                    => 'Title Ar',
            'title_ar_helper'             => ' ',
            'description_en'              => 'Description En',
            'description_en_helper'       => ' ',
            'description_ar'              => 'Description Ar',
            'description_ar_helper'       => ' ',
            'short_description_en'        => 'Short Description En',
            'short_description_en_helper' => ' ',
            'short_description_ar'        => 'Short Description Ar',
            'short_description_ar_helper' => ' ',
            'page_title'                  => 'Page Title',
            'page_title_helper'           => ' ',
            'layout'                      => 'Layout',
            'layout_helper'               => ' ',
            'created_at'                  => 'Created at',
            'created_at_helper'           => ' ',
            'updated_at'                  => 'Updated at',
            'updated_at_helper'           => ' ',
            'deleted_at'                  => 'Deleted at',
            'deleted_at_helper'           => ' ',
        ],
    ],
    'item' => [
        'title'          => 'Items',
        'title_singular' => 'Item',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'title_en'              => 'Title En',
            'title_en_helper'       => ' ',
            'title_ar'              => 'Title Ar',
            'title_ar_helper'       => ' ',
            'image'                 => 'Image',
            'image_helper'          => ' ',
            'description_en'        => 'Description En',
            'description_en_helper' => ' ',
            'description_ar'        => 'Description Ar',
            'description_ar_helper' => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
            'order'                 => 'Order',
            'order_helper'          => ' ',
            'step_item'             => 'Step Item',
            'step_item_helper'      => ' ',
        ],
    ],
    'contentManagement' => [
        'title'          => 'Content Management',
        'title_singular' => 'Content Management',
    ],
    'service' => [
        'title'          => 'Services',
        'title_singular' => 'Service',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'description_en'        => 'Description En',
            'description_en_helper' => ' ',
            'description_ar'        => 'Description Ar',
            'description_ar_helper' => ' ',
            'icon'                  => 'Icon',
            'icon_helper'           => ' ',
            'title_en'              => 'Title En',
            'title_en_helper'       => ' ',
            'title_ar'              => 'Title Ar',
            'title_ar_helper'       => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
        ],
    ],
    'work' => [
        'title'          => 'Works',
        'title_singular' => 'Work',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'image'                 => 'Image',
            'image_helper'          => ' ',
            'title_en'              => 'Title En',
            'title_en_helper'       => ' ',
            'title_ar'              => 'Title Ar',
            'title_ar_helper'       => ' ',
            'description_en'        => 'Description En',
            'description_en_helper' => ' ',
            'description_ar'        => 'Description Ar',
            'description_ar_helper' => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
        ],
    ],
    'category' => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'image'                 => 'Image',
            'image_helper'          => ' ',
            'title_en'              => 'Title En',
            'title_en_helper'       => ' ',
            'title_ar'              => 'Title Ar',
            'title_ar_helper'       => ' ',
            'description_en'        => 'Description En',
            'description_en_helper' => ' ',
            'description_ar'        => 'Description Ar',
            'description_ar_helper' => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
        ],
    ],
    'contact' => [
        'title'          => 'Contact',
        'title_singular' => 'Contact',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'email'             => 'Email',
            'email_helper'      => ' ',
            'phone'             => 'Phone',
            'phone_helper'      => ' ',
            'subject'           => 'Subject',
            'subject_helper'    => ' ',
            'message'           => 'Message',
            'message_helper'    => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'specialSection' => [
        'title'          => 'Special Section',
        'title_singular' => 'Special Section',
        'fields'         => [
            'id'                          => 'ID',
            'id_helper'                   => ' ',
            'title_en'                    => 'Title En',
            'title_en_helper'             => ' ',
            'title_ar'                    => 'Title Ar',
            'title_ar_helper'             => ' ',
            'description_en'              => 'Description En',
            'description_en_helper'       => ' ',
            'description_ar'              => 'Description Ar',
            'description_ar_helper'       => ' ',
            'image'                       => 'Image',
            'image_helper'                => ' ',
            'created_at'                  => 'Created at',
            'created_at_helper'           => ' ',
            'updated_at'                  => 'Updated at',
            'updated_at_helper'           => ' ',
            'deleted_at'                  => 'Deleted at',
            'deleted_at_helper'           => ' ',
            'team'                        => 'Team',
            'team_helper'                 => ' ',
            'place'                       => 'Place',
            'place_helper'                => ' ',
            'section_place'               => 'Section Place',
            'section_place_helper'        => ' ',
            'status'                      => 'Status',
            'status_helper'               => ' ',
            'order'                       => 'Order',
            'order_helper'                => ' ',
            'short_description_en'        => 'Short Description En',
            'short_description_en_helper' => ' ',
            'short_description_ar'        => 'Short Description Ar',
            'short_description_ar_helper' => ' ',
        ],
    ],
    'layaoutplace' => [
        'title'          => 'Layaoutplace',
        'title_singular' => 'Layaoutplace',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'product' => [
        'title'          => 'Product',
        'title_singular' => 'Product',
        'fields'         => [
            'id'                         => 'ID',
            'id_helper'                  => ' ',
            'image'                      => 'Image',
            'image_helper'               => ' ',
            'title_en'                   => 'Title En',
            'title_en_helper'            => ' ',
            'title_ar'                   => 'Title Ar',
            'title_ar_helper'            => ' ',
            'shortdescription_en'        => 'Shortdescription En',
            'shortdescription_en_helper' => ' ',
            'shortdescription_ar'        => 'Shortdescription Ar',
            'shortdescription_ar_helper' => ' ',
            'category'                   => 'Category',
            'category_helper'            => ' ',
            'created_at'                 => 'Created at',
            'created_at_helper'          => ' ',
            'updated_at'                 => 'Updated at',
            'updated_at_helper'          => ' ',
            'deleted_at'                 => 'Deleted at',
            'deleted_at_helper'          => ' ',
        ],
    ],
    'ourMission' => [
        'title'          => 'Our Mission',
        'title_singular' => 'Our Mission',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'order'                 => 'Order',
            'order_helper'          => ' ',
            'title_en'              => 'Title En',
            'title_en_helper'       => ' ',
            'title_ar'              => 'Title Ar',
            'title_ar_helper'       => ' ',
            'description_en'        => 'Description En',
            'description_en_helper' => ' ',
            'description_ar'        => 'Description Ar',
            'description_ar_helper' => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
        ],
    ],
    'choose' => [
        'title'          => 'Choose',
        'title_singular' => 'Choose',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'icon'                  => 'Icon',
            'icon_helper'           => ' ',
            'title_en'              => 'Title En',
            'title_en_helper'       => ' ',
            'title_ar'              => 'Title Ar',
            'title_ar_helper'       => ' ',
            'description_en'        => 'Description En',
            'description_en_helper' => ' ',
            'description_ar'        => 'Description Ar',
            'description_ar_helper' => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
        ],
    ],
    'stepByStep' => [
        'title'          => 'Step By Step',
        'title_singular' => 'Step By Step',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title_en'          => 'Title En',
            'title_en_helper'   => ' ',
            'title_ar'          => 'Title Ar',
            'title_ar_helper'   => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],

    'testimonial' => [
        'title'          => 'Testimonials',
        'title_singular' => 'Testimonial',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'name_ar'             => 'Name Ar',
            'name_ar_helper'      => ' ',
            'name_en'             => 'Name En',
            'name_en_helper'      => ' ',
            'text_ar'             => 'Text Ar',
            'text_ar_helper'      => ' ',
            'text_en'             => 'Text En',
            'text_en_helper'      => ' ',
            'job_title_ar'        => 'Job Title Ar',
            'job_title_ar_helper' => ' ',
            'job_title_en'        => 'Job Title En',
            'job_title_en_helper' => ' ',
            'image'               => 'Image',
            'image_helper'        => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => ' ',
        ],
    ],

];
