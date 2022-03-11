<?php

namespace App\Http\Controllers\Kakeibo;

use App\Http\Controllers\Controller;
use App\Http\Requests\KakeiboRequest;
use App\Services\Register\IStoreRegister;
use App\Services\Results\IStoreResult;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Throwable;

class StoreKakeiboController extends Controller
{
    private IStoreResult $storeResultService;
    private IStoreRegister $storeRegisterService;

    public function __construct(IStoreResult $storeResultService, IStoreRegister $storeRegisterService)
    {
        $this->storeResultService = $storeResultService;
        $this->storeRegisterService = $storeRegisterService;
    }

    /**
     * @throws Throwable
     */
    public function __invoke(KakeiboRequest $request): RedirectResponse
    {
        $result = DB::transaction(function () use ($request) {
            $result = $this->storeResultService->execute($request->costs_01, $request->costs_02);
            $this->storeRegisterService->execute($request->costs_01, $request->costs_02, $result);
            return $result;
        });
        return redirect()->route('result')->with($result->toArray());
    }
}
