<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'team_create',
            ],
            [
                'id'    => 18,
                'title' => 'team_edit',
            ],
            [
                'id'    => 19,
                'title' => 'team_show',
            ],
            [
                'id'    => 20,
                'title' => 'team_delete',
            ],
            [
                'id'    => 21,
                'title' => 'team_access',
            ],
            [
                'id'    => 22,
                'title' => 'expense_management_access',
            ],
            [
                'id'    => 23,
                'title' => 'expense_category_create',
            ],
            [
                'id'    => 24,
                'title' => 'expense_category_edit',
            ],
            [
                'id'    => 25,
                'title' => 'expense_category_show',
            ],
            [
                'id'    => 26,
                'title' => 'expense_category_delete',
            ],
            [
                'id'    => 27,
                'title' => 'expense_category_access',
            ],
            [
                'id'    => 28,
                'title' => 'income_category_create',
            ],
            [
                'id'    => 29,
                'title' => 'income_category_edit',
            ],
            [
                'id'    => 30,
                'title' => 'income_category_show',
            ],
            [
                'id'    => 31,
                'title' => 'income_category_delete',
            ],
            [
                'id'    => 32,
                'title' => 'income_category_access',
            ],
            [
                'id'    => 33,
                'title' => 'expense_create',
            ],
            [
                'id'    => 34,
                'title' => 'expense_edit',
            ],
            [
                'id'    => 35,
                'title' => 'expense_show',
            ],
            [
                'id'    => 36,
                'title' => 'expense_delete',
            ],
            [
                'id'    => 37,
                'title' => 'expense_access',
            ],
            [
                'id'    => 38,
                'title' => 'income_create',
            ],
            [
                'id'    => 39,
                'title' => 'income_edit',
            ],
            [
                'id'    => 40,
                'title' => 'income_show',
            ],
            [
                'id'    => 41,
                'title' => 'income_delete',
            ],
            [
                'id'    => 42,
                'title' => 'income_access',
            ],
            [
                'id'    => 43,
                'title' => 'expense_report_create',
            ],
            [
                'id'    => 44,
                'title' => 'expense_report_edit',
            ],
            [
                'id'    => 45,
                'title' => 'expense_report_show',
            ],
            [
                'id'    => 46,
                'title' => 'expense_report_delete',
            ],
            [
                'id'    => 47,
                'title' => 'expense_report_access',
            ],
            [
                'id'    => 48,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 49,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 50,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 51,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 52,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 53,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 54,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 55,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 56,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 57,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 58,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 59,
                'title' => 'task_create',
            ],
            [
                'id'    => 60,
                'title' => 'task_edit',
            ],
            [
                'id'    => 61,
                'title' => 'task_show',
            ],
            [
                'id'    => 62,
                'title' => 'task_delete',
            ],
            [
                'id'    => 63,
                'title' => 'task_access',
            ],
            [
                'id'    => 64,
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => 65,
                'title' => 'client_management_setting_access',
            ],
            [
                'id'    => 66,
                'title' => 'currency_create',
            ],
            [
                'id'    => 67,
                'title' => 'currency_edit',
            ],
            [
                'id'    => 68,
                'title' => 'currency_show',
            ],
            [
                'id'    => 69,
                'title' => 'currency_delete',
            ],
            [
                'id'    => 70,
                'title' => 'currency_access',
            ],
            [
                'id'    => 71,
                'title' => 'transaction_type_create',
            ],
            [
                'id'    => 72,
                'title' => 'transaction_type_edit',
            ],
            [
                'id'    => 73,
                'title' => 'transaction_type_show',
            ],
            [
                'id'    => 74,
                'title' => 'transaction_type_delete',
            ],
            [
                'id'    => 75,
                'title' => 'transaction_type_access',
            ],
            [
                'id'    => 76,
                'title' => 'income_source_create',
            ],
            [
                'id'    => 77,
                'title' => 'income_source_edit',
            ],
            [
                'id'    => 78,
                'title' => 'income_source_show',
            ],
            [
                'id'    => 79,
                'title' => 'income_source_delete',
            ],
            [
                'id'    => 80,
                'title' => 'income_source_access',
            ],
            [
                'id'    => 81,
                'title' => 'client_status_create',
            ],
            [
                'id'    => 82,
                'title' => 'client_status_edit',
            ],
            [
                'id'    => 83,
                'title' => 'client_status_show',
            ],
            [
                'id'    => 84,
                'title' => 'client_status_delete',
            ],
            [
                'id'    => 85,
                'title' => 'client_status_access',
            ],
            [
                'id'    => 86,
                'title' => 'project_status_create',
            ],
            [
                'id'    => 87,
                'title' => 'project_status_edit',
            ],
            [
                'id'    => 88,
                'title' => 'project_status_show',
            ],
            [
                'id'    => 89,
                'title' => 'project_status_delete',
            ],
            [
                'id'    => 90,
                'title' => 'project_status_access',
            ],
            [
                'id'    => 91,
                'title' => 'client_management_access',
            ],
            [
                'id'    => 92,
                'title' => 'client_create',
            ],
            [
                'id'    => 93,
                'title' => 'client_edit',
            ],
            [
                'id'    => 94,
                'title' => 'client_show',
            ],
            [
                'id'    => 95,
                'title' => 'client_delete',
            ],
            [
                'id'    => 96,
                'title' => 'client_access',
            ],
            [
                'id'    => 97,
                'title' => 'project_create',
            ],
            [
                'id'    => 98,
                'title' => 'project_edit',
            ],
            [
                'id'    => 99,
                'title' => 'project_show',
            ],
            [
                'id'    => 100,
                'title' => 'project_delete',
            ],
            [
                'id'    => 101,
                'title' => 'project_access',
            ],
            [
                'id'    => 102,
                'title' => 'note_create',
            ],
            [
                'id'    => 103,
                'title' => 'note_edit',
            ],
            [
                'id'    => 104,
                'title' => 'note_show',
            ],
            [
                'id'    => 105,
                'title' => 'note_delete',
            ],
            [
                'id'    => 106,
                'title' => 'note_access',
            ],
            [
                'id'    => 107,
                'title' => 'document_create',
            ],
            [
                'id'    => 108,
                'title' => 'document_edit',
            ],
            [
                'id'    => 109,
                'title' => 'document_show',
            ],
            [
                'id'    => 110,
                'title' => 'document_delete',
            ],
            [
                'id'    => 111,
                'title' => 'document_access',
            ],
            [
                'id'    => 112,
                'title' => 'transaction_create',
            ],
            [
                'id'    => 113,
                'title' => 'transaction_edit',
            ],
            [
                'id'    => 114,
                'title' => 'transaction_show',
            ],
            [
                'id'    => 115,
                'title' => 'transaction_delete',
            ],
            [
                'id'    => 116,
                'title' => 'transaction_access',
            ],
            [
                'id'    => 117,
                'title' => 'client_report_create',
            ],
            [
                'id'    => 118,
                'title' => 'client_report_edit',
            ],
            [
                'id'    => 119,
                'title' => 'client_report_show',
            ],
            [
                'id'    => 120,
                'title' => 'client_report_delete',
            ],
            [
                'id'    => 121,
                'title' => 'client_report_access',
            ],
            [
                'id'    => 122,
                'title' => 'main_menu_access',
            ],
            [
                'id'    => 123,
                'title' => 'setting_create',
            ],
            [
                'id'    => 124,
                'title' => 'setting_edit',
            ],
            [
                'id'    => 125,
                'title' => 'setting_show',
            ],
            [
                'id'    => 126,
                'title' => 'setting_delete',
            ],
            [
                'id'    => 127,
                'title' => 'setting_access',
            ],
            [
                'id'    => 128,
                'title' => 'social_link_create',
            ],
            [
                'id'    => 129,
                'title' => 'social_link_edit',
            ],
            [
                'id'    => 130,
                'title' => 'social_link_show',
            ],
            [
                'id'    => 131,
                'title' => 'social_link_delete',
            ],
            [
                'id'    => 132,
                'title' => 'social_link_access',
            ],
            [
                'id'    => 133,
                'title' => 'slider_create',
            ],
            [
                'id'    => 134,
                'title' => 'slider_edit',
            ],
            [
                'id'    => 135,
                'title' => 'slider_show',
            ],
            [
                'id'    => 136,
                'title' => 'slider_delete',
            ],
            [
                'id'    => 137,
                'title' => 'slider_access',
            ],
            [
                'id'    => 138,
                'title' => 'page_iteme_access',
            ],
            [
                'id'    => 139,
                'title' => 'page_create',
            ],
            [
                'id'    => 140,
                'title' => 'page_edit',
            ],
            [
                'id'    => 141,
                'title' => 'page_show',
            ],
            [
                'id'    => 142,
                'title' => 'page_delete',
            ],
            [
                'id'    => 143,
                'title' => 'page_access',
            ],
            [
                'id'    => 144,
                'title' => 'item_create',
            ],
            [
                'id'    => 145,
                'title' => 'item_edit',
            ],
            [
                'id'    => 146,
                'title' => 'item_show',
            ],
            [
                'id'    => 147,
                'title' => 'item_delete',
            ],
            [
                'id'    => 148,
                'title' => 'item_access',
            ],
            [
                'id'    => 149,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 150,
                'title' => 'service_create',
            ],
            [
                'id'    => 151,
                'title' => 'service_edit',
            ],
            [
                'id'    => 152,
                'title' => 'service_show',
            ],
            [
                'id'    => 153,
                'title' => 'service_delete',
            ],
            [
                'id'    => 154,
                'title' => 'service_access',
            ],
            [
                'id'    => 155,
                'title' => 'work_create',
            ],
            [
                'id'    => 156,
                'title' => 'work_edit',
            ],
            [
                'id'    => 157,
                'title' => 'work_show',
            ],
            [
                'id'    => 158,
                'title' => 'work_delete',
            ],
            [
                'id'    => 159,
                'title' => 'work_access',
            ],
            [
                'id'    => 160,
                'title' => 'category_create',
            ],
            [
                'id'    => 161,
                'title' => 'category_edit',
            ],
            [
                'id'    => 162,
                'title' => 'category_show',
            ],
            [
                'id'    => 163,
                'title' => 'category_delete',
            ],
            [
                'id'    => 164,
                'title' => 'category_access',
            ],
            [
                'id'    => 165,
                'title' => 'contact_create',
            ],
            [
                'id'    => 166,
                'title' => 'contact_edit',
            ],
            [
                'id'    => 167,
                'title' => 'contact_show',
            ],
            [
                'id'    => 168,
                'title' => 'contact_delete',
            ],
            [
                'id'    => 169,
                'title' => 'contact_access',
            ],
            [
                'id'    => 170,
                'title' => 'special_section_create',
            ],
            [
                'id'    => 171,
                'title' => 'special_section_edit',
            ],
            [
                'id'    => 172,
                'title' => 'special_section_show',
            ],
            [
                'id'    => 173,
                'title' => 'special_section_delete',
            ],
            [
                'id'    => 174,
                'title' => 'special_section_access',
            ],
            [
                'id'    => 175,
                'title' => 'layaoutplace_create',
            ],
            [
                'id'    => 176,
                'title' => 'layaoutplace_edit',
            ],
            [
                'id'    => 177,
                'title' => 'layaoutplace_show',
            ],
            [
                'id'    => 178,
                'title' => 'layaoutplace_delete',
            ],
            [
                'id'    => 179,
                'title' => 'layaoutplace_access',
            ],
            [
                'id'    => 180,
                'title' => 'product_create',
            ],
            [
                'id'    => 181,
                'title' => 'product_edit',
            ],
            [
                'id'    => 182,
                'title' => 'product_show',
            ],
            [
                'id'    => 183,
                'title' => 'product_delete',
            ],
            [
                'id'    => 184,
                'title' => 'product_access',
            ],
            [
                'id'    => 185,
                'title' => 'our_mission_create',
            ],
            [
                'id'    => 186,
                'title' => 'our_mission_edit',
            ],
            [
                'id'    => 187,
                'title' => 'our_mission_show',
            ],
            [
                'id'    => 188,
                'title' => 'our_mission_delete',
            ],
            [
                'id'    => 189,
                'title' => 'our_mission_access',
            ],
            [
                'id'    => 190,
                'title' => 'choose_create',
            ],
            [
                'id'    => 191,
                'title' => 'choose_edit',
            ],
            [
                'id'    => 192,
                'title' => 'choose_show',
            ],
            [
                'id'    => 193,
                'title' => 'choose_delete',
            ],
            [
                'id'    => 194,
                'title' => 'choose_access',
            ],
            [
                'id'    => 195,
                'title' => 'step_by_step_create',
            ],
            [
                'id'    => 196,
                'title' => 'step_by_step_edit',
            ],
            [
                'id'    => 197,
                'title' => 'step_by_step_show',
            ],
            [
                'id'    => 198,
                'title' => 'step_by_step_delete',
            ],
            [
                'id'    => 199,
                'title' => 'step_by_step_access',
            ],
            [
                'id'    => 200,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
