@extends('welcome')

@section('content')
<div class="p-top-bottom-100 division header-area-hide" style="margin-top: 7%;">
    <div class="container">
        <div class="row">

<div class="col-md-12" >
<div class="sblog-post-txt m-bottom-10">			
		<p class="post-meta"><a class="post-time" href="" rel="bookmark"><time class="entry-date published updated" datetime="2018-10-03T07:31:00+00:00">{{ date("d/m/Y", strtotime($artikel[0]->tanggal)) }}</time></a></p><!-- Post Data -->			
		
		<h4 class="h4-lg">{{ $artikel[0]->judul }}</h4><!-- Post Title -->
		<div class="m-bottom-50">
		</div>		
		<div class="m-bottom-80 p-bottom-40 entry-content">
			<?php echo base64_decode($artikel[0]->isi_artikel)?>
		</div><!-- Post Text -->
	</div>
	</div>
</div>
</div>
</div>
@stop
