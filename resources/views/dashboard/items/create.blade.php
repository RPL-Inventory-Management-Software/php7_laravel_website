@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Item</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/items">
      @csrf
    <br>
    <div class="container">
        <div class="row mb-3">
          <label for="inputItemName" class="col-sm-2 col-form-label">Item Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputItemName" placeholder="Input the item name" name="name" required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputSlugName" class="col-sm-2 col-form-label">Slug</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputSlugName" placeholder="Input the slug" name="slug" required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputBrand" class="col-sm-2 col-form-label">Brand</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputBrand" placeholder="Input the project creator" name="brand" required>
          </div>
        </div>
        <div class="row mb-3">
            <label for="inputQuantity" class="col-sm-2 col-form-label">Quantity</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="inputQuantity" placeholder="Input the number of the item" min="1" name="quantity" required>
            </div>
          </div>
        <div class="row mb-3">
          <label for="inputType" class="col-sm-2 col-form-label">Item Type</label>
          <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example" name="type" required>
              <option selected>Choose the type of the item</option>
              <option value="equipment">Equipment</option>
              <option value="furniture">Furniture</option>
            </select>
          </div>
        </div>
        <!-- <div class="row mb-3">
          <label for="formFile" class="col-sm-2 col-form-label">Item Picture</label>
          <div class="col-sm-10">
            <input class="form-control" id="formFile" type="file" accept="image/*" name="image">
          </div>
        </div> -->
        <div class="row mb-3">
          <label for="inputDesc" class="col-sm-2 col-form-label">Description</label>
          <div class="col-sm-10">
            <textarea class="form-control" id="inputDesc" placeholder="Describe about the item/product" rows="5" name="description" required></textarea>
          </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary me-md-2" type="submit">Submit</button>
        </div>
    </div>
    </form>
</div>

@endsection