{{-- @if ($crud->hasAccess('update')) --}}
{{-- /product/{id}/remote_images --}}
{{-- http://127.0.0.1:8000/product/1000038/remote_images --}}
<a href="/cat/{{ $entry->getKey() }}/remote_images" class="btn btn-xs btn-default"><i class="fa fa-ban"></i> Картинки</a>
{{-- @endif --}}
