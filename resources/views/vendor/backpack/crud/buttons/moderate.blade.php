{{-- @if ($crud->hasAccess('update')) --}}
{{-- /product/{id}/remote_images --}}
<a href="{{ Request::url().'/'.$entry->getKey() }}/remote_images" class="btn btn-xs btn-default"><i class="fa fa-ban"></i> Moderate</a>
{{-- @endif --}}
