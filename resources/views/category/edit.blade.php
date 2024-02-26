<x-app-web-layout>
 <x-slot name="title">
    Add Categories
 </x-slot>
 <div class="container mt-5">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <div class="alert alert-success">{{session('status')}} </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>
                        Add Categories
                        <a href="{{url('categories')}}" class= "btn btn-primary float-end">Back</a>
                      </h4>
    </div>
                        <div class="card-body">
                            <form action="{{ url('categories/'.$category->id.'/edit') }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name ="name" class="form-control" value="{{ $category->name }}" />
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="mb-3">
                                <label>Description</label>
                                <textarea type="text" name ="description" class="form-control" rows="3">{{ $category->description }}</textarea>
                                @error('description') <span class="text-danger">{{ $message }}</span> @enderror

                            </div>
                            
                            <div class="mb-3">
                                <label>Is Active</label>
                                <input type="checkbox" name="is_active" {{ $category->is_active == true ? 'checked':''}} />
                                @error('is_active') <span class="text-danger">{{ $message }}</span> @enderror

                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Update</button>

                            </div>
                        </form>
                   </div>
               </div>
           </div>
         </div>
     </div>
</x-app-web-layout>