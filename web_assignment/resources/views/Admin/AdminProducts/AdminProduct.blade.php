@extends('Admin.AdminLayouts.admininclude')
<link rel="stylesheet" href="{{ asset('contant/custome-style/admin/adminproduct/adminproduct.css') }}">
<script src="{{ asset('contant/script/jquery-3.6.3.js') }}"></script>
<script src="{{ asset('contant/script/jquery-ui.js') }}"></script>
<div class="mr_product">
    <div class="pro_header">
        <div class="btn_product header_btn">
            <i class="bi bi-box2"></i>
            Products
        </div>
        <div class="btn_category header_btn">
            <i class="bi bi-box-seam"></i>
            Category
        </div>
        <div class="btn_subcategory header_btn">
            <i class="bi bi-box-seam-fill"></i>
            Sub Categpry
        </div>
    </div>

    <div class="title">
        <span>Products</span>
    </div>

    {{-- <div class="message">
        <div class="my_margin"></div>
        <div class="my_message" role="alert" id="my_message">
            Message
        </div>
        <div class="my_margin"></div>
    </div> --}}

    <div class="product_content">
        <div class="product_btn">
            <div class="btn_promodal">
                {{-- <i class="bi bi-easel2"></i> --}}
                <button type="button" title="Add Product" class="btn-sm btn-primary rounded"
                    onclick="openProductModal()">
                    <i class="bi bi-plus-circle"></i>
                    Add Product
                </button>
            </div>
        </div>

        <div class="table_area">
            <table>
                <thead>
                    <th style="width: 3%; text-align: center"><span>#</span></th>
                    <th style="width: 10%; text-align: center"><span>Product Id</span></th>
                    <th style="width: 25%; text-align: center"><span>Item</span></th>
                    <th style="width: 45%; text-align: center"><span>Description</span></th>
                    <th style="width: 10%; text-align: center"><span>Category</span></th>
                    <th style="width: 7%; text-align: center"><span>Action</span></th>
                </thead>
                <tbody id="tblpro">
                    {{-- <tr>
                        <td style="width: 3%; text-align: center">1</td>
                        <td style="width: 10%; text-align: center">1</td>
                        <td style="width: 25%; text-align: start; padding-left: 5px">1</td>
                        <td style="width: 45%; text-align: start; padding-left: 5px">1</td>
                        <td style="width: 10%; text-align: center">1</td>
                        <td style="width: 7%; text-align: center">
                            <i class="bi bi-check-square"></i>
                            <i class="bi bi-eye"></i>
                            <i class="bi bi-trash3"></i>
                        </td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
    </div>

    <div class="category_content" style="display: none">
        <div class="category_btn">
            <div class="btn_catemodal">
                {{-- <i class="bi bi-easel2"></i> --}}
                <button type="button" title="Add Category" class="btn-sm btn-primary rounded"
                    onclick="openCategoryModal()">
                    <i class="bi bi-plus-circle"></i>
                    Add Category
                </button>
            </div>
        </div>

        <div class="table_area">
            <table>
                <thead>
                    <th style="width: 3%; text-align: center"><span>#</span></th>
                    <th style="width: 10%; text-align: center"><span>Id</span></th>
                    <th style="width: 80%; text-align: center"><span>Category</span></th>
                    <th style="width: 7%; text-align: center"><span>Action</span></th>
                </thead>
                <tbody id="tblcat">
                    {{-- <tr>
                        <td style="width: 3%; text-align: center">1</td>
                        <td style="width: 10%; text-align: center">1</td>
                        <td style="width: 80%; text-align: center">1</td>
                        <td style="width: 7%; text-align: center">
                            <i class="bi bi-check-square"></i>
                            <i class="bi bi-eye"></i>
                            <i class="bi bi-trash3"></i>
                        </td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
    </div>

    <div class="subcategory_content" style="display: none">
        <div class="subcategory_btn">
            <div class="btn_subcatemodal">
                {{-- <i class="bi bi-easel2"></i> --}}
                <button type="button" title="Add Sub Category" class="btn-sm btn-primary rounded"
                    onclick="openSubCategoryModal()">
                    <i class="bi bi-plus-circle"></i>
                    Add Sub Category
                </button>
            </div>
        </div>

        <div class="table_area">
            <table>
                <thead>
                    <th style="width: 3%; text-align: center"><span>#</span></th>
                    <th style="width: 10%; text-align: center"><span>Id</span></th>
                    <th style="width: 40%; text-align: center"><span>Sub Category</span></th>
                    <th style="width: 40%; text-align: center"><span>Category</span></th>
                    <th style="width: 7%; text-align: center"><span>Action</span></th>
                </thead>
                <tbody id="tblsub">
                    {{-- <tr>
                        <td style="width: 3%; text-align: center">1</td>
                        <td style="width: 10%; text-align: center">1</td>
                        <td style="width: 40%; text-align: center">1</td>
                        <td style="width: 40%; text-align: center">1</td>
                        <td style="width: 7%; text-align: center">
                            <i class="bi bi-check-square"></i>
                            <i class="bi bi-eye"></i>
                            <i class="bi bi-trash3"></i>
                        </td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- Modal Product --}}
<div class="modal fade" id="MyProductModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ProductModalTitle">Products</h5>
                <button type="button" class="btn-close btn-sm" {{-- data-bs-dismiss="modal" aria-label="Close" --}}
                    onclick="closeProductModal()"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="Product Id" class="form-label form-label-sm">Product Id</label>
                        <input type="text" class="form-control form-control-sm" id="ProductId" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="Item" class="form-label form-label-sm">Item</label>
                        <input type="text" class="form-control form-control-sm" id="Item">
                    </div>
                    <div class="mb-3">
                        <label for="Description" class="form-label form-label-sm">Description</label>
                        <input type="text" class="form-control form-control-sm" id="Description">
                    </div>
                    <div class="mb-3">
                        <label for="CategoryPro" class="form-label form-label-sm">Category</label>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm" id="CategoryPro">
                            {{-- <option selected hidden>Choose Category</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option> --}}
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="AddPro" type="button" class="btn-sm btn-success" onclick="insertProduct()"
                    title="Add"><i class="bi bi-plus-circle-dotted" style="margin-right: 10px"></i>Save</button>
                <button id="UpdatePro" type="button" class="btn-sm btn-warning" onclick="updateProduct()"
                    title="Update" style=" display: none"><i class="bi bi-brush"
                        style="margin-right: 10px;"></i>Update</button>
                <button type="button" class="btn-sm btn-secondary" {{-- data-bs-dismiss="modal" --}}
                    onclick="closeProductModal()" title="Close">Close</button>
            </div>
        </div>
    </div>
</div>

{{-- Modal Category --}}
<div class="modal fade" id="MyCategoryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="CategoryModalTitle">Category</h5>
                <button type="button" class="btn-close btn-sm" {{-- data-bs-dismiss="modal" aria-label="Close" --}}
                    onclick="closeCategoryModal()"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="CategoryId" class="form-label form-label-sm">Id</label>
                        <input type="text" class="form-control form-control-sm" id="CategoryId" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="CategoryCat" class="form-label form-label-sm">Category</label>
                        <input type="text" class="form-control form-control-sm" id="CategoryCat">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="AddCat" type="button" class="btn-sm btn-success" onclick="insertCategory()"
                    title="Add"><i class="bi bi-plus-circle-dotted" style="margin-right: 10px"></i>Save</button>
                <button id="UpdateCat" type="button" class="btn-sm btn-warning" onclick="updateCategory()"
                    title="Update" style=" display: none"><i class="bi bi-brush"
                        style="margin-right: 10px;"></i>Update</button>
                <button type="button" class="btn-sm btn-secondary" {{-- data-bs-dismiss="modal" --}}
                    onclick="closeCategoryModal()" title="Close">Close</button>
            </div>
        </div>
    </div>
</div>

{{-- Modal Sub Category --}}
<div class="modal fade" id="MySubCategoryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="SubCategoryModalTitle">Sub Category</h5>
                <button type="button" class="btn-close btn-sm" {{-- data-bs-dismiss="modal" aria-label="Close" --}}
                    onclick="closeSubCategoryModal()"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="SubCatId" class="form-label form-label-sm">Id</label>
                        <input type="text" class="form-control form-control-sm" id="SubCatId" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="SubCategory" class="form-label form-label-sm">Sub Category</label>
                        <input type="text" class="form-control form-control-sm" id="SubCategory">
                    </div>
                    <div class="mb-3">
                        <label for="CategorySub" class="form-label form-label-sm">Category</label>
                        {{-- <input type="text" class="form-control form-control-sm" id="CategorySub"> --}}
                        <select class="form-select form-select-sm" aria-label=".form-select-sm" id="CategorySub">
                            {{-- <option selected hidden>Choose Category</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option> --}}
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="AddSub" type="button" class="btn-sm btn-success" onclick="insertSubCategory()"
                    title="Add"><i class="bi bi-plus-circle-dotted" style="margin-right: 10px"></i>Save</button>
                <button id="UpdateSub" type="button" class="btn-sm btn-warning" onclick="updateSubCategory()"
                    title="Update" style=" display: none"><i class="bi bi-brush"
                        style="margin-right: 10px;"></i>Update</button>
                <button type="button" class="btn-sm btn-secondary" {{-- data-bs-dismiss="modal" --}}
                    onclick="closeSubCategoryModal()" title="Close">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('contant/custome-style/admin/adminproduct/adminproduct.js') }}"></script>
