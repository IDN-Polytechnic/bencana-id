@include('charity.template.header')

<section id="home" class="flex items-center justify-center px-20 h-screen pt-52">
	<article class="px-40">
		<h1 class="w-96">Charity IT Class</h1>
		<p class="w-[25em] mb-20">Event ini adalah kelas khusus Pemuda yang tertarik di Dunia IT dan hasil keuntungan dari event ini akan kami gunakan untuk membantu saudara kita yang terkena bencana. Yuk, ikut Event ini, sekarang juga ! </p>
		<a href="#form" class="btn-learn">Start Learn</a>
	</article>
	<div>
		<img src="/images/ilustrasi.png" alt="ilustrasi">
	</div>
</section>

<section id="kelas" class="px-20 flex flex-col justify-center items-center h-screen" >
	<h1>Kelas Kami</h1>
	<div class="flex ">
		@foreach ($major as $item)
		<label for="major-{{ $item->id }}">
			<div class="hover:bg-slate-300 rounded-xl flex flex-col justify-center items-center bg-slate-200 px-20 py-10 mx-10">
				<img src="/icons/{{ $item->name }}.svg" alt="">
				<h2 class="text-2xl mt-8 font-semibold text-sky-900 ">{{ $item->name }}</h2>
			</div>
			<input type="checkbox" id="major-1" class="modal-toggle" />
				<div class="modal">
					<div class="modal-box">
						<tr>
							<td></td>
						</tr>
						<div class="modal-action">
							<label for="major-1" class="btn">close</label>
						</div>
					</div>
				</div>
		</label>
		@endforeach
	</div>
</section>


<!-- Modal Designer -->
<input type="checkbox" id="major-1" class="modal-toggle" />
<div class="modal">
  <div class="modal-box">
    <tr>
			<td></td>
		</tr>
    <div class="modal-action">
      <label for="major-1" class="btn">close</label>
    </div>
  </div>
</div>

<!-- Modal Programmer -->




<section id="kelas" class="px-20 flex flex-col justify-center items-center h-screen" >
	<h1>Kelas Kami</h1>
	<div class="flex ">
		@foreach ($mentor as $item)
			<div class="flex flex-col justify-center items-center mx-10">
				<a href="{{ $item->link }}">
					<div class="w-52 h-52 hover:bg-slate-300 rounded-full bg-slate-200 px-20 py-10 mx-2 text-center"></div>
					<img src="/icons/{{ $item->name }}.jpg" alt="">
				</a>
				<h2 class="text-xl mt-8 font-semibold text-sky-900 ">{{ $item->name }}</h2>
				<a href="/icons/{{ $item->name }}.jpg" class="text-md mt-8 font-medium text-sky-900/50">{{ $item->title }}</a>
			</div>
		@endforeach
	</div>
</section>





@include('charity.template.footer')


