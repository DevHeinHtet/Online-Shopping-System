@extends('admin.template.app')
@section('content')
@include('tool.message')

<div class="p-4">
    <nav class="flex">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li>
                <div class="flex items-center">
                    <router-link
                        to="/products"
                        href="#"
                        class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white"
                        >Item List</router-link
                    >
                </div>
            </li>
            <li>
                <div class="flex items-center">
                    <svg
                        class="w-6 h-6 text-gray-400"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                    <span
                        class="ml-1 text-sm font-medium text-blue-600 md:ml-2 dark:text-gray-400"
                        >Add Items</span
                    >
                </div>
            </li>
        </ol>
    </nav>
    <div>
        <p class="px-4 py-2.5 bg-gray-200 rounded-md mt-6 text-base">
            Add Items
        </p>
        @if(count($errors) > 0)
        <div id="form-error" class="text-red-800 bg-gray-200 p-4 mb-4 text-xs rounded-sm">
            @foreach($errors->all() as $error)
                    <span>{{ $error }}</span><br>
                @endforeach
            </div>
        @endif
       <form action="{{ route('products.create') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex">
            <div class="flex flex-col w-1/2 p-4 text-base">
                <span>Item Information</span>
                <div class="mt-4 space-y-2">
                    <label for="item_name">Item Name*</label>
                    <input
                        type="text"
                        id="item_name"
                        name="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 w-full p-2.5"
                        placeholder="Input Name"
                        required
                    />
                </div>

                <div class="mt-4 space-y-2">
                    <label for="category">Select Category* </label>
                    <select
                        name="category_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 w-full p-2.5"
                    >
                        <option selected>Choose a category</option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">
                            {{ $category->name }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="mt-4 space-y-2">
                    <label for="item_price">Price*</label>
                    <input
                        type="text"
                        id="item_price"
                        name="price"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 w-full p-2.5"
                        placeholder="Enter Price"
                        required
                    />
                </div>

                <div class="mt-4 space-y-2">
                    <label for="">Description*</label>
                    <textarea name="description" class="ckeditor" placeholder="description"></textarea>
                </div>
               
                <div class="mt-4 space-y-2">
                    <label for="condition">Select Item Condition</label>
                    <select
                        id="condition"
                        name="condition"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 w-full p-2.5"
                    >
                        <option selected>Select Item Condition</option>
                        <option value="new">New</option>
                        <option value="used">Used</option>
                    </select>
                </div>

                <div class="mt-4 space-y-2">
                    <label for="type">Select Item Type</label>
                    <select
                        id="type"
                        name="type"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 w-full p-2.5"
                    >
                        <option selected>Select Item Type</option>
                        <option value="sell">Sell</option>
                        <option value="buy">Buy</option>
                        <option value="exchange">Exchange</option>
                    </select>
                </div>

                <div class="mt-4 space-y-2">
                    <label>Status</label>
                    <div class="flex items-center mb-4">
                        <input
                            id="status"
                            name="status"
                            type="checkbox"
                            class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2 dark:bg-gray-700"
                        />
                        <label
                            for="status"
                            class="ml-2 text-sm font-medium text-gray-900"
                            >Publish</label
                        >
                    </div>
                </div>

                <div class="mt-4 space-y-2">
                    <label>Item Photo*</label>
                    <p class="text-xs text-gray-500 dark:text-gray-400">
                        Recommended Size 400 x 200
                    </p>
                    <div class="w-full h-64 border-dashed border-2 border-gray-300 rounded-lg bg-gray-50 p-2">
                        <label for="file">
                            <div id="drag" class="w-full h-full flex flex-col justify-center items-center cursor-pointer space-y-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                                </svg>
                                <span>Drag and drop here</span>
                                <span>or</span>
                                <button class="px-4 py-2 bg-blue-600 text-white text-sm rounded-md">Choose Files</button>
                            </div>
                            <img id="img-preview" class="w-full h-full hidden object-contain cursor-pointer" src="" alt="Profile Image">  
                        </label>
                        <input
                                id="file"
                                type="file"
                                name="photo"
                                onchange="productImage()"
                                class="hidden"
                            />
                    </div>
                </div>
            </div>
            <div class="flex flex-col w-1/2 p-4">
                <span>Owner Information</span>
                <div class="mt-4 space-y-2">
                    <label for="owner_name">Owner Name*</label>
                    <input
                        type="text"
                        id="owner_name"
                        name="owner_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 w-full p-2.5"
                        placeholder="Owner Name"
                        required
                    />
                </div>
                <div class="mt-4 space-y-2">
                    <label>Contact Number</label>
                    <div
                        class="flex justify-between border border-gray-300 rounded-md"
                    >
                        <select
                            id="stateCode"
                            name="stateCode"
                            class="text-gray-900 rounded-tl-md rounded-bl-md text-sm w-20 focus:ring-blue-500 focus:border-blue-500 p-2.5"
                        >
                            <option value="US">95+</option>
                        </select>
                        <input
                            type="number"
                            id="phone_no"
                            name="phone_no"
                            class="text-gray-900 rounded-tr-md rounded-br-md text-sm w-full p-2.5"
                            placeholder="Add Number"
                            required
                        />
                    </div>
                </div>
                <div class="mt-4 space-y-2">
                    <label
                        for="address"
                        class="block mb-2 text-base font-medium text-gray-900 dark:text-white"
                        >Address</label
                    >
                    <textarea
                        id="address"
                        name="address"
                        rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Enter Address"
                    ></textarea>
                </div>
                <div class="mt-4">
                    <div id="map-canvas" class="h-[40rem] bg-green-500"></div> 
                    <input type="text" id="location" name="location" class="hidden">
                </div>
                <div class="mt-6 text-end">
                    <button
                        class="px-8 text-sm py-2 rounded-md text-blue-700"
                    >
                        Cancel
                    </button>
                    <button
                        class="px-8 text-sm py-2 rounded-md text-white bg-blue-700"
                    >
                        Save
                    </button>
                </div>
            </div>
        </div>
       </form>
    </div>
</div>
<script type="text/javascript">
    const imgPreview = document.getElementById("img-preview");
    const drag = document.getElementById("drag");

    function productImage() {
        var file = document.getElementById('file').files;
        if(file.length > 0){
            var fileReader = new FileReader();
            fileReader.onload = function(event){
                imgPreview.classList.remove('hidden');
                drag.classList.add('hidden');
                imgPreview.setAttribute('src',event.target.result)
            };
            fileReader.readAsDataURL(file[0]);
        }
    }

    var latlng = new google.maps.LatLng(18.9434881,96.4397407);

    var map = new google.maps.Map(document.getElementById('map-canvas'), {
        center: latlng,
        zoom: 15,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        title: 'Place the marker for your location!', //The title on hover to display
        draggable: true //this makes it drag and drop
    });

    google.maps.event.addListener(marker, 'dragend', function(a) {
        document.getElementById('location').value = a.latLng.lat().toFixed(4) + ', ' + a.latLng.lng().toFixed(4); 
    });

    const item = document.querySelector('.product');
 item.classList.add('bg-blue-600');
 item.classList.add('text-white');
</script>
@endsection