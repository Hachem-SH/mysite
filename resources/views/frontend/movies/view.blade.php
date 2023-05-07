@extends('layouts/app')

@section('title')
{{$movie->name}}
@endsection

@section('content')

<style>
    .container {text-align: center;}
    div.hidden{display: none}



    body{
        background-color: #2B2B31;
    }

</style>

<div class="container">
<br><br><br><br><br><br>




<div class="servers-tabs">
    <ul>

    <li class="Hoverable" id="s1" onclick="changeBg(this);" >
    Mega
    </li>
    <li class="Hoverable" id="s2" onclick="changeBg(this);" >
    Drive
    </li>
    <li class="Hoverable" id="s3" onclick="changeBg(this);">
    Ok.ru
    </li>
    <li class="Hoverable" id="s4" onclick="changeBg(this);">
    Mp4upload
    </li>
    <li class="Hoverable" id="s5" onclick="changeBg(this);">
    4shared
    </li>
    <li class="Hoverable" id="s6" onclick="changeBg(this);">
    Uptobox
    </li>
    <li class="Hoverable" id="s7" onclick="changeBg(this);">
    Vidshare
    </li>
    </ul>
</div>











<div id="myDIV1">
    <iframe src="{{$movie->server_link_mega}}" width="1110" height="720" frameborder="0" allowfullscreen></iframe>
</div>

<div id="myDIV2" class="hidden">
    <iframe src="{{$movie->server_link_drive}}"  width="1110" height="720"frameborder="0" allowfullscreen=></iframe>


</div>



<div id="myDIV3" class="hidden">

    <iframe width="1110" height="720" src="{{$movie->server_link_ok}}" frameborder="0" allow="autoplay" allowfullscreen></iframe>
</div>



<div id="myDIV4" class="hidden">
    <IFRAME SRC="{{$movie->server_link_mp4upload}}" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=1110 HEIGHT=720 allowfullscreen></IFRAME>
</div>



<div id="myDIV5" class="hidden">
    <iframe src="{{$movie->server_link_4shared}}" frameborder="0" scrolling="no" width="1110" height="720" allowfullscreen="true"></iframe>

</div>



<div id="myDIV6" class="hidden">
    <iframe width="1110" height="720" src="{{$movie->server_link_uptobox}}" scrolling="no" frameborder="0" allowfullscreen webkitallowfullscreen></iframe>

</div>



<div id="myDIV7" class="hidden">
    <IFRAME SRC="{{$movie->server_link_vidshare}}" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0 SCROLLING=NO WIDTH=1110 HEIGHT=720 allowfullscreen></IFRAME>


</div>

<br><br><br>

<div class="servers-tabs">
<ul>

    <li  class="Hoverable"  id="s1" >
        روابط التحميل
    </li>
</ul>
</div>

<br><br>
<div class="servers-tabs">
    <ul>
@if ($movie->down_link_mega)
<li onclick="location.href='{{$movie->down_link_mega}}';" class="Hoverable" id="s11"  >
    Mega
</li>
@endif

@if ($movie->down_link_drive)
    <li onclick="location.href='{{$movie->down_link_drive}}';" class="Hoverable" id="s22"  >
    Drive
    </li>
    @endif

    @if ($movie->down_link_ok)
    <li onclick="location.href='{{$movie->down_link_ok}}';" class="Hoverable" id="s33" >
    Ok.ru
    </li>
    @endif

    @if ($movie->down_link_mp4upload)
    <li onclick="location.href='{{$movie->down_link_mp4upload}}';" class="Hoverable" id="s44" >
    Mp4upload
    </li>
    @endif

    @if ($movie->down_link_4shared)
    <li onclick="location.href='{{$movie->down_link_4shared}}';" class="Hoverable" id="s55" >
    4shared
    </li>
    @endif

    @if ($movie->down_link_uptobox)
    <li onclick="location.href='{{$movie->down_link_uptobox}}';" class="Hoverable" id="s66" >
    Uptobox
    </li>
    @endif

    @if ($movie->down_link_vidshare)
    <li onclick="location.href='{{$movie->down_link_vidshare}}';" class="Hoverable" id="s77" >
    Vidshare
    </li>
    @endif
    </ul>
</div>







<br><br><br><br><br>
@endsection
@section('scripts')

