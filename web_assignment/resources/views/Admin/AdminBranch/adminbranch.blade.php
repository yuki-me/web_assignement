@extends('Admin.AdminLayouts.admininclude')
<link rel="stylesheet" href="{{ asset('contant/custome-style/admin/adminbranch/adminbranch.css') }}">
<script src="{{ asset('contant/script/jquery-3.6.3.js') }}"></script>
<script src="{{ asset('contant/script/jquery-ui.js') }}"></script>
<div class="mr_branch">

    <div class="title">
        <span>Branchs</span>
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
            <div class="btn_branchmodal">
                {{-- <i class="bi bi-easel2"></i> --}}
                <button type="button" title="Add Product" class="btn-sm btn-primary rounded" onclick="openBranchModal()">
                    <i class="bi bi-plus-circle"></i>
                    Add Branch
                </button>
            </div>
        </div>

        <div class="table_area">
            <table>
                <thead>
                    <th style="width: 3%; text-align: center"><span>#</span></th>
                    <th style="width: 10%; text-align: center"><span>Branch Id</span></th>
                    <th style="width: 20%; text-align: center"><span>Branch Name</span></th>
                    <th style="width: 45%; text-align: center"><span>Description</span></th>
                    <th style="width: 15%; text-align: center"><span>File Name</span></th>
                    <th style="width: 7%; text-align: center"><span>Action</span></th>
                </thead>
                <tbody id="tblbra">
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

{{-- Modal Branch --}}
<div class="modal fade" id="MyBranchModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="BranchModalTitle">Branch</h5>
                <button type="button" class="btn-close btn-sm" {{-- data-bs-dismiss="modal" aria-label="Close" --}}
                    onclick="closeBranchModal()"></button>
            </div>
            <div class="modal-body">
                <form id="Form" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="Id" class="form-label form-label-sm">Id</label>
                        <input type="text" class="form-control form-control-sm" id="Id" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="BranchName" class="form-label form-label-sm">Branch Name</label>
                        <input type="text" class="form-control form-control-sm" id="BranchName">
                    </div>
                    <div class="mb-3">
                        <label for="Description" class="form-label form-label-sm">Description</label>
                        <input type="text" class="form-control form-control-sm" id="Description">
                    </div>
                    <div class="mb-3">
                        <label for="Image" class="form-label form-label-sm">Image</label>
                        <input type="file" name="MyImage" class="form-control form-control-sm" id="Image">
                        <span id="imageId" hidden></span>
                        {{-- <select class="form-select form-select-sm" aria-label=".form-select-sm" id="Image">
                            <option selected hidden>Choose Category</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select> --}}
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="AddBra" type="button" class="btn-sm btn-success" onclick="insertBranch()"
                    title="Add"><i class="bi bi-plus-circle-dotted" style="margin-right: 10px"></i>Save</button>
                <button id="UpdateBra" type="button" class="btn-sm btn-warning" onclick="updateBranch()" title="Update"
                    style=" display: none"><i class="bi bi-brush" style="margin-right: 10px;"></i>Update</button>
                <button type="button" class="btn-sm btn-secondary" {{-- data-bs-dismiss="modal" --}} onclick="closeBranchModal()"
                    title="Close">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('contant/custome-style/admin/adminbranch/adminbranch.js') }}"></script>
