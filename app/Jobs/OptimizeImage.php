<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Spatie\ImageOptimizer\OptimizerChainFactory;

class OptimizeImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $ImagePath;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($PathToImage)
    {
        $this->ImagePath = $PathToImage;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $optimizerChain = OptimizerChainFactory::create();
	    $optimizerChain->optimize($this->ImagePath);
    }
}
