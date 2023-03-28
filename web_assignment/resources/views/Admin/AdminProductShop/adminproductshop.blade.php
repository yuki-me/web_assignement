@extends('Admin.AdminLayouts.admininclude')
<link rel="stylesheet" href="{{ asset('contant/custome-style/admin/adminproductshop/adminproductshop.css') }}">
<script src="{{ asset('contant/script/jquery-3.6.3.js') }}"></script>
<script src="{{ asset('contant/script/jquery-ui.js') }}"></script>
<div class="mr_product">
    {{-- <div class="pro_header">
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
    </div> --}}

    <div class="title">
        <span>Products Shop</span>
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
                <button type="button" title="Add Product" class="btn-sm btn-primary rounded" onclick="openProductModal()">
                    <i class="bi bi-plus-circle"></i>
                    Add Product
                </button>
            </div>
        </div>

        <div class="table_area">
            <table>
                <thead>
                    <th style="width: 3%; text-align: center"><span>#</span></th>
                    <th style="width: 5%; text-align: center"><span>Id</span></th>
                    <th style="width: 15%; text-align: center"><span>Item</span></th>
                    <th style="width: 25%; text-align: center"><span>Display Space</span></th>
                    <th style="width: 5%; text-align: center"><span>Qty</span></th>
                    <th style="width: 10%; text-align: center"><span>Cost</span></th>
                    <th style="width: 10%; text-align: center"><span>SalePrice</span></th>
                    <th style="width: 10%; text-align: center"><span>Amount</span></th>
                    <th style="width: 5%; text-align: center"><span>Percetage</span></th>
                    <th style="width: 5%; text-align: center"><span>ProductStatus</span></th>
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

</div>

{{-- Modal Product --}}
<div class="modal fade" id="MyProductModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ProductModalTitle">Product</h5>
                <button type="button" class="btn-close btn-sm" {{-- data-bs-dismiss="modal" aria-label="Close" --}}
                    onclick="closeProductModal()"></button>
            </div>
            <div class="modal-body d-flex">
                <form>
                    <div class="mb-3">
                        <label for="Id" class="form-label form-label-sm">Id</label>
                        <input type="text" class="form-control form-control-sm" id="Id" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="Item" class="form-label form-label-sm">Item</label>
                        <input type="text" class="form-control form-control-sm" id="Item">
                    </div>
                    <div class="mb-3 ">
                        <label for="Display Space" class="form-label form-label-sm">Display Space</label>
                        <textarea type="text" class="form-control form-control-sm" id="DisplaySpace" style="height: 190px"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="Qty" class="form-label form-label-sm">Qty</label>
                        <input type="text" class="form-control form-control-sm" id="Qty">
                    </div>
                    <div class="mb-3">
                        <label for="Cost" class="form-label form-label-sm">Cost</label>
                        <input type="text" class="form-control form-control-sm" id="Cost">
                    </div>
                </form>
                <form>
                    <div class="mb-3">
                        <label for="SalePrice" class="form-label form-label-sm">SalePrice</label>
                        <input type="text" class="form-control form-control-sm" id="SalePrice">
                    </div>
                    <div class="mb-3">
                        <label for="Amount" class="form-label form-label-sm">Amount</label>
                        <input type="text" class="form-control form-control-sm" id="Amount">
                    </div>
                    <div class="mb-3">
                        <label for="Percetage" class="form-label form-label-sm">Percetage</label>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm" id="Percetage">
                            {{-- <option selected hidden>Choose Category</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option> --}}
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="ProductStatus" class="form-label form-label-sm">ProductStatus</label>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm" id="ProductStatus">
                            {{-- <option selected hidden>Choose Category</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option> --}}
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Image" class="form-label form-label-sm">Main Image</label>
                        <input type="file" name="MyImage" class="form-control form-control-sm MyImage"
                            id="MainImage">
                    </div>
                    <div class="mb-3">
                        <label for="Image" class="form-label form-label-sm">Sub Image</label>
                        <input type="file" name="MyImage" class="form-control form-control-sm MyImage"
                            id="SubImage">
                    </div>
                    <div class="mb-3">
                        <label for="Image" class="form-label form-label-sm">Sub Image</label>
                        <input type="file" name="MyImage" class="form-control form-control-sm MyImage"
                            id="SubImage2">
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



<script src="{{ asset('contant/custome-style/admin/adminproductshop/adminproductshop.js') }}"></script>
