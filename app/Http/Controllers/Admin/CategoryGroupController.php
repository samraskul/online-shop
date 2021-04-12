<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateCategoryGroupRequest;
use App\Http\Requests\Admin\UpdateCategoryGroupRequest;
use App\Repositories\Admin\CategoryGroupRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CategoryGroupController extends AppBaseController
{
    /** @var  CategoryGroupRepository */
    private $categoryGroupRepository;

    public function __construct(CategoryGroupRepository $categoryGroupRepo)
    {
        $this->categoryGroupRepository = $categoryGroupRepo;
    }

    /**
     * Display a listing of the CategoryGroup.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $categoryGroups = $this->categoryGroupRepository->all();

        return view('admin.category_groups.index')
            ->with('categoryGroups', $categoryGroups);
    }

    /**
     * Show the form for creating a new CategoryGroup.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.category_groups.create');
    }

    /**
     * Store a newly created CategoryGroup in storage.
     *
     * @param CreateCategoryGroupRequest $request
     *
     * @return Response
     */
    public function store(CreateCategoryGroupRequest $request)
    {
        $input = $request->all();

        $categoryGroup = $this->categoryGroupRepository->create($input);

        Flash::success('Category Group saved successfully.');

        return redirect(route('admin.categoryGroups.index'));
    }

    /**
     * Display the specified CategoryGroup.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $categoryGroup = $this->categoryGroupRepository->find($id);

        if (empty($categoryGroup)) {
            Flash::error('Category Group not found');

            return redirect(route('admin.categoryGroups.index'));
        }

        return view('admin.category_groups.show')->with('categoryGroup', $categoryGroup);
    }

    /**
     * Show the form for editing the specified CategoryGroup.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $categoryGroup = $this->categoryGroupRepository->find($id);

        if (empty($categoryGroup)) {
            Flash::error('Category Group not found');

            return redirect(route('admin.categoryGroups.index'));
        }

        return view('admin.category_groups.edit')->with('categoryGroup', $categoryGroup);
    }

    /**
     * Update the specified CategoryGroup in storage.
     *
     * @param int $id
     * @param UpdateCategoryGroupRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCategoryGroupRequest $request)
    {
        $categoryGroup = $this->categoryGroupRepository->find($id);

        if (empty($categoryGroup)) {
            Flash::error('Category Group not found');

            return redirect(route('admin.categoryGroups.index'));
        }

        $categoryGroup = $this->categoryGroupRepository->update($request->all(), $id);

        Flash::success('Category Group updated successfully.');

        return redirect(route('admin.categoryGroups.index'));
    }

    /**
     * Remove the specified CategoryGroup from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $categoryGroup = $this->categoryGroupRepository->find($id);

        if (empty($categoryGroup)) {
            Flash::error('Category Group not found');

            return redirect(route('admin.categoryGroups.index'));
        }

        $this->categoryGroupRepository->delete($id);

        Flash::success('Category Group deleted successfully.');

        return redirect(route('admin.categoryGroups.index'));
    }
}
