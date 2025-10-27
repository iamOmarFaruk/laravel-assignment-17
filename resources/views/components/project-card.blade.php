@props(['title', 'description', 'imageSrc', 'imageAlt'])

<div {{ $attributes->merge(['class' => 'card overflow-hidden shadow rounded-4 border-0']) }}>
	<div class="card-body p-0">
		<div class="d-flex align-items-center">
			<div class="p-5">
				<h2 class="fw-bolder">{{ $title }}</h2>
				<p>{{ $description }}</p>
			</div>
			<img class="img-fluid" src="{{ $imageSrc }}" alt="{{ $imageAlt }}" />
		</div>
	</div>
</div>


