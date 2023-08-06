<aside class="main-sidebar">
    <section class="sidebar" style="height: auto;">
        <ul class="sidebar-menu tree" data-widget="tree">
            <li>
                <a href="{{ route("admin.home") }}">
                    <i class="fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            @can('client_management_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-briefcase">

                        </i>
                        <span>{{ trans('cruds.clientManagement.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('project_access')
                            <li class="{{ request()->is("admin/projects") || request()->is("admin/projects/*") ? "active" : "" }}">
                                <a href="{{ route("admin.projects.index") }}">
                                    <i class="fa-fw fas fa-briefcase">

                                    </i>
                                    <span>{{ trans('cruds.project.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('note_access')
                            <li class="{{ request()->is("admin/notes") || request()->is("admin/notes/*") ? "active" : "" }}">
                                <a href="{{ route("admin.notes.index") }}">
                                    <i class="fa-fw fas fa-sticky-note">

                                    </i>
                                    <span>{{ trans('cruds.note.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('transaction_access')
                            <li class="{{ request()->is("admin/transactions") || request()->is("admin/transactions/*") ? "active" : "" }}">
                                <a href="{{ route("admin.transactions.index") }}">
                                    <i class="fa-fw fas fa-credit-card">

                                    </i>
                                    <span>{{ trans('cruds.transaction.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('client_report_access')
                            <li class="{{ request()->is("admin/client-reports") || request()->is("admin/client-reports/*") ? "active" : "" }}">
                                <a href="{{ route("admin.client-reports.index") }}">
                                    <i class="fa-fw fas fa-chart-line">

                                    </i>
                                    <span>{{ trans('cruds.clientReport.title') }}</span>

                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('expense_management_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-money-bill">

                        </i>
                        <span>{{ trans('cruds.expenseManagement.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('client_access')
                            <li class="{{ request()->is("admin/clients") || request()->is("admin/clients/*") ? "active" : "" }}">
                                <a href="{{ route("admin.clients.index") }}">
                                    <i class="fa-fw fas fa-user-plus">

                                    </i>
                                    <span>{{ trans('cruds.client.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('document_access')
                            <li class="{{ request()->is("admin/documents") || request()->is("admin/documents/*") ? "active" : "" }}">
                                <a href="{{ route("admin.documents.index") }}">
                                    <i class="fa-fw fas fa-file-alt">

                                    </i>
                                    <span>{{ trans('cruds.document.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('expense_category_access')
                            <li class="{{ request()->is("admin/expense-categories") || request()->is("admin/expense-categories/*") ? "active" : "" }}">
                                <a href="{{ route("admin.expense-categories.index") }}">
                                    <i class="fa-fw fas fa-list">

                                    </i>
                                    <span>{{ trans('cruds.expenseCategory.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('income_category_access')
                            <li class="{{ request()->is("admin/income-categories") || request()->is("admin/income-categories/*") ? "active" : "" }}">
                                <a href="{{ route("admin.income-categories.index") }}">
                                    <i class="fa-fw fas fa-list">

                                    </i>
                                    <span>{{ trans('cruds.incomeCategory.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('expense_access')
                            <li class="{{ request()->is("admin/expenses") || request()->is("admin/expenses/*") ? "active" : "" }}">
                                <a href="{{ route("admin.expenses.index") }}">
                                    <i class="fa-fw fas fa-arrow-circle-right">

                                    </i>
                                    <span>{{ trans('cruds.expense.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('income_access')
                            <li class="{{ request()->is("admin/incomes") || request()->is("admin/incomes/*") ? "active" : "" }}">
                                <a href="{{ route("admin.incomes.index") }}">
                                    <i class="fa-fw fas fa-arrow-circle-right">

                                    </i>
                                    <span>{{ trans('cruds.income.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('expense_report_access')
                            <li class="{{ request()->is("admin/expense-reports") || request()->is("admin/expense-reports/*") ? "active" : "" }}">
                                <a href="{{ route("admin.expense-reports.index") }}">
                                    <i class="fa-fw fas fa-chart-line">

                                    </i>
                                    <span>{{ trans('cruds.expenseReport.title') }}</span>

                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('basic_c_r_m_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-briefcase">

                        </i>
                        <span>{{ trans('cruds.basicCRM.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('crm_status_access')
                            <li class="{{ request()->is("admin/crm-statuses") || request()->is("admin/crm-statuses/*") ? "active" : "" }}">
                                <a href="{{ route("admin.crm-statuses.index") }}">
                                    <i class="fa-fw fas fa-folder">

                                    </i>
                                    <span>{{ trans('cruds.crmStatus.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('crm_customer_access')
                            <li class="{{ request()->is("admin/crm-customers") || request()->is("admin/crm-customers/*") ? "active" : "" }}">
                                <a href="{{ route("admin.crm-customers.index") }}">
                                    <i class="fa-fw fas fa-user-plus">

                                    </i>
                                    <span>{{ trans('cruds.crmCustomer.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('crm_note_access')
                            <li class="{{ request()->is("admin/crm-notes") || request()->is("admin/crm-notes/*") ? "active" : "" }}">
                                <a href="{{ route("admin.crm-notes.index") }}">
                                    <i class="fa-fw fas fa-sticky-note">

                                    </i>
                                    <span>{{ trans('cruds.crmNote.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('crm_document_access')
                            <li class="{{ request()->is("admin/crm-documents") || request()->is("admin/crm-documents/*") ? "active" : "" }}">
                                <a href="{{ route("admin.crm-documents.index") }}">
                                    <i class="fa-fw fas fa-folder">

                                    </i>
                                    <span>{{ trans('cruds.crmDocument.title') }}</span>

                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('product_management_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-shopping-cart">

                        </i>
                        <span>{{ trans('cruds.productManagement.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('product_access')
                            <li class="{{ request()->is("admin/products") || request()->is("admin/products/*") ? "active" : "" }}">
                                <a href="{{ route("admin.products.index") }}">
                                    <i class="fa-fw fas fa-shopping-cart">

                                    </i>
                                    <span>{{ trans('cruds.product.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('product_category_access')
                            <li class="{{ request()->is("admin/product-categories") || request()->is("admin/product-categories/*") ? "active" : "" }}">
                                <a href="{{ route("admin.product-categories.index") }}">
                                    <i class="fa-fw fas fa-folder">

                                    </i>
                                    <span>{{ trans('cruds.productCategory.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('product_tag_access')
                            <li class="{{ request()->is("admin/product-tags") || request()->is("admin/product-tags/*") ? "active" : "" }}">
                                <a href="{{ route("admin.product-tags.index") }}">
                                    <i class="fa-fw fas fa-folder">

                                    </i>
                                    <span>{{ trans('cruds.productTag.title') }}</span>

                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('user_management_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-users">

                        </i>
                        <span>{{ trans('cruds.userManagement.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('permission_access')
                            <li class="{{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "active" : "" }}">
                                <a href="{{ route("admin.permissions.index") }}">
                                    <i class="fa-fw fas fa-unlock-alt">

                                    </i>
                                    <span>{{ trans('cruds.permission.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="{{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "active" : "" }}">
                                <a href="{{ route("admin.roles.index") }}">
                                    <i class="fa-fw fas fa-briefcase">

                                    </i>
                                    <span>{{ trans('cruds.role.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="{{ request()->is("admin/users") || request()->is("admin/users/*") ? "active" : "" }}">
                                <a href="{{ route("admin.users.index") }}">
                                    <i class="fa-fw fas fa-user">

                                    </i>
                                    <span>{{ trans('cruds.user.title') }}</span>

                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('contact_management_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-phone-square">

                        </i>
                        <span>{{ trans('cruds.contactManagement.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('contact_company_access')
                            <li class="{{ request()->is("admin/contact-companies") || request()->is("admin/contact-companies/*") ? "active" : "" }}">
                                <a href="{{ route("admin.contact-companies.index") }}">
                                    <i class="fa-fw fas fa-building">

                                    </i>
                                    <span>{{ trans('cruds.contactCompany.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('contact_contact_access')
                            <li class="{{ request()->is("admin/contact-contacts") || request()->is("admin/contact-contacts/*") ? "active" : "" }}">
                                <a href="{{ route("admin.contact-contacts.index") }}">
                                    <i class="fa-fw fas fa-user-plus">

                                    </i>
                                    <span>{{ trans('cruds.contactContact.title') }}</span>

                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('time_management_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-clock">

                        </i>
                        <span>{{ trans('cruds.timeManagement.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('time_work_type_access')
                            <li class="{{ request()->is("admin/time-work-types") || request()->is("admin/time-work-types/*") ? "active" : "" }}">
                                <a href="{{ route("admin.time-work-types.index") }}">
                                    <i class="fa-fw fas fa-th">

                                    </i>
                                    <span>{{ trans('cruds.timeWorkType.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('time_project_access')
                            <li class="{{ request()->is("admin/time-projects") || request()->is("admin/time-projects/*") ? "active" : "" }}">
                                <a href="{{ route("admin.time-projects.index") }}">
                                    <i class="fa-fw fas fa-briefcase">

                                    </i>
                                    <span>{{ trans('cruds.timeProject.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('time_entry_access')
                            <li class="{{ request()->is("admin/time-entries") || request()->is("admin/time-entries/*") ? "active" : "" }}">
                                <a href="{{ route("admin.time-entries.index") }}">
                                    <i class="fa-fw fas fa-briefcase">

                                    </i>
                                    <span>{{ trans('cruds.timeEntry.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('time_report_access')
                            <li class="{{ request()->is("admin/time-reports") || request()->is("admin/time-reports/*") ? "active" : "" }}">
                                <a href="{{ route("admin.time-reports.index") }}">
                                    <i class="fa-fw fas fa-chart-line">

                                    </i>
                                    <span>{{ trans('cruds.timeReport.title') }}</span>

                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('content_management_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-book">

                        </i>
                        <span>{{ trans('cruds.contentManagement.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('content_category_access')
                            <li class="{{ request()->is("admin/content-categories") || request()->is("admin/content-categories/*") ? "active" : "" }}">
                                <a href="{{ route("admin.content-categories.index") }}">
                                    <i class="fa-fw fas fa-folder">

                                    </i>
                                    <span>{{ trans('cruds.contentCategory.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('content_tag_access')
                            <li class="{{ request()->is("admin/content-tags") || request()->is("admin/content-tags/*") ? "active" : "" }}">
                                <a href="{{ route("admin.content-tags.index") }}">
                                    <i class="fa-fw fas fa-tags">

                                    </i>
                                    <span>{{ trans('cruds.contentTag.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('content_page_access')
                            <li class="{{ request()->is("admin/content-pages") || request()->is("admin/content-pages/*") ? "active" : "" }}">
                                <a href="{{ route("admin.content-pages.index") }}">
                                    <i class="fa-fw fas fa-file">

                                    </i>
                                    <span>{{ trans('cruds.contentPage.title') }}</span>

                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('client_management_setting_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-cog">

                        </i>
                        <span>{{ trans('cruds.clientManagementSetting.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('currency_access')
                            <li class="{{ request()->is("admin/currencies") || request()->is("admin/currencies/*") ? "active" : "" }}">
                                <a href="{{ route("admin.currencies.index") }}">
                                    <i class="fa-fw fas fa-money-bill">

                                    </i>
                                    <span>{{ trans('cruds.currency.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('transaction_type_access')
                            <li class="{{ request()->is("admin/transaction-types") || request()->is("admin/transaction-types/*") ? "active" : "" }}">
                                <a href="{{ route("admin.transaction-types.index") }}">
                                    <i class="fa-fw fas fa-money-check">

                                    </i>
                                    <span>{{ trans('cruds.transactionType.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('income_source_access')
                            <li class="{{ request()->is("admin/income-sources") || request()->is("admin/income-sources/*") ? "active" : "" }}">
                                <a href="{{ route("admin.income-sources.index") }}">
                                    <i class="fa-fw fas fa-database">

                                    </i>
                                    <span>{{ trans('cruds.incomeSource.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('client_status_access')
                            <li class="{{ request()->is("admin/client-statuses") || request()->is("admin/client-statuses/*") ? "active" : "" }}">
                                <a href="{{ route("admin.client-statuses.index") }}">
                                    <i class="fa-fw fas fa-server">

                                    </i>
                                    <span>{{ trans('cruds.clientStatus.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('project_status_access')
                            <li class="{{ request()->is("admin/project-statuses") || request()->is("admin/project-statuses/*") ? "active" : "" }}">
                                <a href="{{ route("admin.project-statuses.index") }}">
                                    <i class="fa-fw fas fa-server">

                                    </i>
                                    <span>{{ trans('cruds.projectStatus.title') }}</span>

                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                @can('profile_password_edit')
                    <li class="{{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}">
                        <a href="{{ route('profile.password.edit') }}">
                            <i class="fa-fw fas fa-key">
                            </i>
                            {{ trans('global.change_password') }}
                        </a>
                    </li>
                @endcan
            @endif
            <li>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>
    </section>
</aside>