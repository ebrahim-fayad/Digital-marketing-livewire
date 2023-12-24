        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="row g-4">
                    @if (count($services) >0)
                    @foreach ($services as $service)

                    <div class="col-lg-4 wow fadeInUp" wire:key="Custom-Services-{{ $service->id }}" data-wow-delay="0.{{ $service->id }}s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="{{ $service->icon }} fa-3x text-primary mb-4"></i>
                            <h5 class="mb-3">{{ $service->name }}</h5>
                            <p class="m-0">{{ $service->description }}.</p>
                        </div>
                    </div><!-- end co -->
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
