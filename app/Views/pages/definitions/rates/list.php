<?=$this->extend('layouts/main')?>

<?=$this->section('styles')?>
    <?=link_tag('public/assets/css/vendor/datatables.min.css')?>
<?=$this->endSection()?>

<?=$this->section('content')?>
    <div class="row">
        <div class="col">
            <div class="page-title-container">
                <div class="row">
                    <div class="col-12 col-md-7">
                        <h1 class="mb-0 pb-0 display-4" id="title">Datatables Editable Rows</h1>
                        <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                            <ul class="breadcrumb pt-0">
                                <li class="breadcrumb-item"><a href="Dashboards.Default.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="Interface.html">Interface</a></li>
                                <li class="breadcrumb-item"><a href="Interface.Plugins.html">Plugins</a></li>
                                <li class="breadcrumb-item"><a href="Interface.Plugins.Datatables.html">Datatables</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-12 col-md-5 d-flex align-items-start justify-content-end">
                        <button type="button" class="btn btn-outline-primary btn-icon btn-icon-start w-100 w-md-auto add-datatable">
                            <i data-acorn-icon="plus"></i>
                            <span>Add New</span>
                        </button>
                        <div class="btn-group ms-1 check-all-container">
                            <div class="btn btn-outline-primary btn-custom-control p-0 ps-3 pe-2" id="datatableCheckAllButton">
    <span class="form-check float-end">
    <input type="checkbox" class="form-check-input" id="datatableCheckAll">
    </span>
                            </div>
                            <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-bs-offset="0,3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-submenu></button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <div class="dropdown dropstart dropdown-submenu">
                                    <button class="dropdown-item dropdown-toggle tag-datatable caret-absolute disabled" type="button">Tag</button>
                                    <div class="dropdown-menu">
                                        <button class="dropdown-item tag-done" type="button">Done</button>
                                        <button class="dropdown-item tag-new" type="button">New</button>
                                        <button class="dropdown-item tag-sale" type="button">Sale</button>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <button class="dropdown-item disabled delete-datatable" type="button">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="data-table-rows slim">
                <div class="row">
                    <div class="col-sm-12 col-md-5 col-lg-3 col-xxl-2 mb-1">
                        <div class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 shadow bg-foreground">
                            <input class="form-control datatable-search" placeholder="Search" data-datatable="#datatableRows">
                            <span class="search-magnifier-icon">
    <i data-acorn-icon="search"></i>
    </span>
                            <span class="search-delete-icon d-none">
    <i data-acorn-icon="close"></i>
    </span>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-7 col-lg-9 col-xxl-10 text-end mb-1">
                        <div class="d-inline-block me-0 me-sm-3 float-start float-md-none">
                            <button class="btn btn-icon btn-icon-only btn-foreground-alternate shadow add-datatable" data-bs-toggle="tooltip" data-bs-placement="top" title="Add" type="button" data-bs-delay="0">
                                <i data-acorn-icon="plus"></i>
                            </button>
                            <button class="btn btn-icon btn-icon-only btn-foreground-alternate shadow edit-datatable disabled" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" type="button" data-bs-delay="0">
                                <i data-acorn-icon="edit"></i>
                            </button>
                            <button class="btn btn-icon btn-icon-only btn-foreground-alternate shadow disabled delete-datatable" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" type="button" data-bs-delay="0">
                                <i data-acorn-icon="bin"></i>
                            </button>
                        </div>
                        <div class="d-inline-block">
                            <button class="btn btn-icon btn-icon-only btn-foreground-alternate shadow datatable-print" data-datatable="#datatableRows" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-delay="0" title="Print" type="button">
                                <i data-acorn-icon="print"></i>
                            </button>
                            <div class="d-inline-block datatable-export" data-datatable="#datatableRows">
                                <button class="btn p-0" data-bs-toggle="dropdown" type="button" data-bs-offset="0,3">
    <span class="btn btn-icon btn-icon-only btn-foreground-alternate shadow dropdown" data-bs-delay="0" data-bs-placement="top" data-bs-toggle="tooltip" title="Export">
    <i data-acorn-icon="download"></i>
    </span>
                                </button>
                                <div class="dropdown-menu shadow dropdown-menu-end">
                                    <button class="dropdown-item export-copy" type="button">Copy</button>
                                    <button class="dropdown-item export-excel" type="button">Excel</button>
                                    <button class="dropdown-item export-cvs" type="button">Cvs</button>
                                </div>
                            </div>
                            <div class="dropdown-as-select d-inline-block datatable-length" data-datatable="#datatableRows" data-childselector="span">
                                <button class="btn p-0 shadow" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-offset="0,3">
    <span class="btn btn-foreground-alternate dropdown-toggle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-delay="0" title="Item Count">
    10 Items
    </span>
                                </button>
                                <div class="dropdown-menu shadow dropdown-menu-end">
                                    <a class="dropdown-item" href="#">5 Items</a>
                                    <a class="dropdown-item active" href="#">10 Items</a>
                                    <a class="dropdown-item" href="#">20 Items</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="data-table-responsive-wrapper">
                    <table id="datatableRows" class="data-table nowrap hover">
                        <thead>
                            <tr>
                                <th class="text-muted text-small text-uppercase">
                                    Aylar
                                </th>
                                <th class="text-muted text-small text-uppercase">
                                    Ay No
                                </th>
                                <th class="text-muted text-small text-uppercase">
                                    KDV (%)
                                </th>
                                <th class="text-muted text-small text-uppercase">
                                    Birim Fiyat (Krş/kW.s)
                                </th>
                                <th class="text-muted text-small text-uppercase">
                                    Gecikme Faizi (%)
                                </th>
                                <th class="text-muted text-small text-uppercas">
                                    Aydınlatma (Krş)
                                </th>
                                <th class="text-muted text-small text-uppercas">
                                    Hizmet Bedeli (Krş)
                                </th>
                                <th class="empty">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($rates as $rate) : ?>

                                <tr>
                                    <td>
                                        <?=$rate->getMonthName()?>
                                    </td>
                                    <td>
                                        <?=$rate->getMonthNo()?>
                                    </td>
                                    <td>
										<?=$rate->getTaxRate()?>
                                    </td>
                                    <td>
										<?=$rate->getUnitPrice()?>
                                    </td>
                                    <td>
										<?=$rate->getOverdueInterest()?>
                                    </td>
                                    <td>
										<?=$rate->getLightingPrice()?>
                                    </td>
                                    <td>
										<?=$rate->getServicePrice()?>
                                    </td>
                                    <td></td>
                                </tr>

                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal modal-right fade" id="addEditModal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitle">Add New</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input name="Name" type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Sales</label>
                                    <input name="Sales" type="number" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Stock</label>
                                    <input name="Stock" type="number" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Category</label>
                                    <div class="form-check">
                                        <input type="radio" id="category1" name="Category" value="Whole Wheat" class="form-check-input">
                                        <label class="form-check-label" for="category1">Whole Wheat</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" id="category2" name="Category" value="Sourdough" class="form-check-input">
                                        <label class="form-check-label" for="category2">Sourdough</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" id="category3" name="Category" value="Multigrain" class="form-check-input">
                                        <label class="form-check-label" for="category3">Multigrain</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Tag</label>
                                    <div class="form-check">
                                        <input type="radio" id="tag1" name="Tag" value="New" class="form-check-input">
                                        <label class="form-check-label" for="tag1">New</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" id="tag2" name="Tag" value="Sale" class="form-check-input">
                                        <label class="form-check-label" for="tag2">Sale</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" id="tag3" name="Tag" value="Done" class="form-check-input">
                                        <label class="form-check-label" for="tag3">Done</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary" id="addEditConfirmButton">Add</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?=$this->endSection()?>

<?=$this->section('scripts.vendor')?>
    <?=script_tag('public/assets/js/vendor/datatables.min.js')?>
<?=$this->endSection()?>

<?=$this->section('scripts.page')?>
    <?=script_tag('public/assets/js/cs/datatable.extend.js')?>
    <?=script_tag('public/assets/js/plugins/datatable.editablerows.js')?>

<?=$this->endSection()?>
