<div class="mt-2"></div>
<form action="{{$action}}" method="{{$method}}" id="{{@$id}}">
@csrf
@if(isset($label))
    <div class="h3">{{$label}}</div>
@endif
