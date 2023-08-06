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
                'title' => 'product_management_access',
            ],
            [
                'id'    => 18,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 19,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 20,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 21,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 22,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 23,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 24,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 25,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 26,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 27,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 28,
                'title' => 'product_create',
            ],
            [
                'id'    => 29,
                'title' => 'product_edit',
            ],
            [
                'id'    => 30,
                'title' => 'product_show',
            ],
            [
                'id'    => 31,
                'title' => 'product_delete',
            ],
            [
                'id'    => 32,
                'title' => 'product_access',
            ],
            [
                'id'    => 33,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 34,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 35,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 36,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 37,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 38,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 39,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 40,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 41,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 42,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 43,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 44,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 45,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 46,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 47,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 48,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 49,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 50,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 51,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 52,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 53,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 54,
                'title' => 'expense_management_access',
            ],
            [
                'id'    => 55,
                'title' => 'expense_category_create',
            ],
            [
                'id'    => 56,
                'title' => 'expense_category_edit',
            ],
            [
                'id'    => 57,
                'title' => 'expense_category_show',
            ],
            [
                'id'    => 58,
                'title' => 'expense_category_delete',
            ],
            [
                'id'    => 59,
                'title' => 'expense_category_access',
            ],
            [
                'id'    => 60,
                'title' => 'income_category_create',
            ],
            [
                'id'    => 61,
                'title' => 'income_category_edit',
            ],
            [
                'id'    => 62,
                'title' => 'income_category_show',
            ],
            [
                'id'    => 63,
                'title' => 'income_category_delete',
            ],
            [
                'id'    => 64,
                'title' => 'income_category_access',
            ],
            [
                'id'    => 65,
                'title' => 'expense_create',
            ],
            [
                'id'    => 66,
                'title' => 'expense_edit',
            ],
            [
                'id'    => 67,
                'title' => 'expense_show',
            ],
            [
                'id'    => 68,
                'title' => 'expense_delete',
            ],
            [
                'id'    => 69,
                'title' => 'expense_access',
            ],
            [
                'id'    => 70,
                'title' => 'income_create',
            ],
            [
                'id'    => 71,
                'title' => 'income_edit',
            ],
            [
                'id'    => 72,
                'title' => 'income_show',
            ],
            [
                'id'    => 73,
                'title' => 'income_delete',
            ],
            [
                'id'    => 74,
                'title' => 'income_access',
            ],
            [
                'id'    => 75,
                'title' => 'expense_report_create',
            ],
            [
                'id'    => 76,
                'title' => 'expense_report_edit',
            ],
            [
                'id'    => 77,
                'title' => 'expense_report_show',
            ],
            [
                'id'    => 78,
                'title' => 'expense_report_delete',
            ],
            [
                'id'    => 79,
                'title' => 'expense_report_access',
            ],
            [
                'id'    => 80,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 81,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 82,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 83,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 84,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 85,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 86,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 87,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 88,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 89,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 90,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 91,
                'title' => 'time_management_access',
            ],
            [
                'id'    => 92,
                'title' => 'time_work_type_create',
            ],
            [
                'id'    => 93,
                'title' => 'time_work_type_edit',
            ],
            [
                'id'    => 94,
                'title' => 'time_work_type_show',
            ],
            [
                'id'    => 95,
                'title' => 'time_work_type_delete',
            ],
            [
                'id'    => 96,
                'title' => 'time_work_type_access',
            ],
            [
                'id'    => 97,
                'title' => 'time_project_create',
            ],
            [
                'id'    => 98,
                'title' => 'time_project_edit',
            ],
            [
                'id'    => 99,
                'title' => 'time_project_show',
            ],
            [
                'id'    => 100,
                'title' => 'time_project_delete',
            ],
            [
                'id'    => 101,
                'title' => 'time_project_access',
            ],
            [
                'id'    => 102,
                'title' => 'time_entry_create',
            ],
            [
                'id'    => 103,
                'title' => 'time_entry_edit',
            ],
            [
                'id'    => 104,
                'title' => 'time_entry_show',
            ],
            [
                'id'    => 105,
                'title' => 'time_entry_delete',
            ],
            [
                'id'    => 106,
                'title' => 'time_entry_access',
            ],
            [
                'id'    => 107,
                'title' => 'time_report_create',
            ],
            [
                'id'    => 108,
                'title' => 'time_report_edit',
            ],
            [
                'id'    => 109,
                'title' => 'time_report_show',
            ],
            [
                'id'    => 110,
                'title' => 'time_report_delete',
            ],
            [
                'id'    => 111,
                'title' => 'time_report_access',
            ],
            [
                'id'    => 112,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 113,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 114,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 115,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 116,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 117,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 118,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 119,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 120,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 121,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 122,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 123,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 124,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 125,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 126,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 127,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 128,
                'title' => 'client_management_setting_access',
            ],
            [
                'id'    => 129,
                'title' => 'currency_create',
            ],
            [
                'id'    => 130,
                'title' => 'currency_edit',
            ],
            [
                'id'    => 131,
                'title' => 'currency_show',
            ],
            [
                'id'    => 132,
                'title' => 'currency_delete',
            ],
            [
                'id'    => 133,
                'title' => 'currency_access',
            ],
            [
                'id'    => 134,
                'title' => 'transaction_type_create',
            ],
            [
                'id'    => 135,
                'title' => 'transaction_type_edit',
            ],
            [
                'id'    => 136,
                'title' => 'transaction_type_show',
            ],
            [
                'id'    => 137,
                'title' => 'transaction_type_delete',
            ],
            [
                'id'    => 138,
                'title' => 'transaction_type_access',
            ],
            [
                'id'    => 139,
                'title' => 'income_source_create',
            ],
            [
                'id'    => 140,
                'title' => 'income_source_edit',
            ],
            [
                'id'    => 141,
                'title' => 'income_source_show',
            ],
            [
                'id'    => 142,
                'title' => 'income_source_delete',
            ],
            [
                'id'    => 143,
                'title' => 'income_source_access',
            ],
            [
                'id'    => 144,
                'title' => 'client_status_create',
            ],
            [
                'id'    => 145,
                'title' => 'client_status_edit',
            ],
            [
                'id'    => 146,
                'title' => 'client_status_show',
            ],
            [
                'id'    => 147,
                'title' => 'client_status_delete',
            ],
            [
                'id'    => 148,
                'title' => 'client_status_access',
            ],
            [
                'id'    => 149,
                'title' => 'project_status_create',
            ],
            [
                'id'    => 150,
                'title' => 'project_status_edit',
            ],
            [
                'id'    => 151,
                'title' => 'project_status_show',
            ],
            [
                'id'    => 152,
                'title' => 'project_status_delete',
            ],
            [
                'id'    => 153,
                'title' => 'project_status_access',
            ],
            [
                'id'    => 154,
                'title' => 'client_management_access',
            ],
            [
                'id'    => 155,
                'title' => 'client_create',
            ],
            [
                'id'    => 156,
                'title' => 'client_edit',
            ],
            [
                'id'    => 157,
                'title' => 'client_show',
            ],
            [
                'id'    => 158,
                'title' => 'client_delete',
            ],
            [
                'id'    => 159,
                'title' => 'client_access',
            ],
            [
                'id'    => 160,
                'title' => 'project_create',
            ],
            [
                'id'    => 161,
                'title' => 'project_edit',
            ],
            [
                'id'    => 162,
                'title' => 'project_show',
            ],
            [
                'id'    => 163,
                'title' => 'project_delete',
            ],
            [
                'id'    => 164,
                'title' => 'project_access',
            ],
            [
                'id'    => 165,
                'title' => 'note_create',
            ],
            [
                'id'    => 166,
                'title' => 'note_edit',
            ],
            [
                'id'    => 167,
                'title' => 'note_show',
            ],
            [
                'id'    => 168,
                'title' => 'note_delete',
            ],
            [
                'id'    => 169,
                'title' => 'note_access',
            ],
            [
                'id'    => 170,
                'title' => 'document_create',
            ],
            [
                'id'    => 171,
                'title' => 'document_edit',
            ],
            [
                'id'    => 172,
                'title' => 'document_show',
            ],
            [
                'id'    => 173,
                'title' => 'document_delete',
            ],
            [
                'id'    => 174,
                'title' => 'document_access',
            ],
            [
                'id'    => 175,
                'title' => 'transaction_create',
            ],
            [
                'id'    => 176,
                'title' => 'transaction_edit',
            ],
            [
                'id'    => 177,
                'title' => 'transaction_show',
            ],
            [
                'id'    => 178,
                'title' => 'transaction_delete',
            ],
            [
                'id'    => 179,
                'title' => 'transaction_access',
            ],
            [
                'id'    => 180,
                'title' => 'client_report_create',
            ],
            [
                'id'    => 181,
                'title' => 'client_report_edit',
            ],
            [
                'id'    => 182,
                'title' => 'client_report_show',
            ],
            [
                'id'    => 183,
                'title' => 'client_report_delete',
            ],
            [
                'id'    => 184,
                'title' => 'client_report_access',
            ],
            [
                'id'    => 185,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
