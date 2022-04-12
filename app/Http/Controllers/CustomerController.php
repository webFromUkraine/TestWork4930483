<?php

namespace App\Http\Controllers;

use App\Interfaces\CustomerRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CustomerController extends Controller
{
    private CustomerRepositoryInterface $customerRepository;

    public function __construct(CustomerRepositoryInterface $customerRepository) 
    {
        $this->customerRepository = $customerRepository;
    }

    public function index(): JsonResponse 
    {
        return response()->json([
            'data' => $this->customerRepository->getAllCustomers()
        ]);
    }

    public function store(Request $request): JsonResponse 
    {
        $customerDetails = $request->only([
            'name',
            'email'
        ]);

        return response()->json(
            [
                'data' => $this->customerRepository->createCustomer($customerDetails)
            ],
            Response::HTTP_CREATED
        );
    }

    public function show(Request $request): JsonResponse 
    {
        $customerId = $request->route('id');

        return response()->json([
            'data' => $this->customerRepository->getCustomerById($customerId)
        ]);
    }

    public function region(Request $request): JsonResponse 
    {
        $regionName = $request->route('region');

        return response()->json([
            'data' => $this->customerRepository->getCustomerByRegion($regionName)
        ]);
    }

    public function update(Request $request): JsonResponse 
    {
        $customerId = $request->route('id');
        $customerDetails = $request->only([
            'name',
            'email'
        ]);

        return response()->json([
            'data' => $this->customerRepository->updateCustomer($customerId, $customerDetails),
            'details' => $this->customerRepository->getCustomerById($customerId)
        ]);
    }

    public function delete(Request $request): JsonResponse 
    {
        $customerId = $request->route('id');
        $this->customerRepository->deleteCustomer($customerId);
        
        return response()->json([
            'status' => 200,
            'message' => "Customer Deleted Or Never Existed",
        ]);

    }
}
