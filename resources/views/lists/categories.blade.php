<option selected>اختر التصنيف المناسب</option>
@foreach ($categories as $category)
<option value="{{ $category->id }}">{{ $category->title }}</option>
@endforeach