<?php

namespace domain\Services\subcribe;

use App\Models\subcribe;
use domain\Facades\Gallery\AlbumFacade;
use Illuminate\Database\Eloquent\Collection;

/**
 * Gallery Service
 *
 * php version 8
 *
 * @category Service
 * @author   Spera Labs <janith@speralabs.com.au>
 * @license  https://niwadudeals.lk Config
 * @link     https://niwadudeals.lk/
 **/
class subcribeService
{
    protected $subcribe;

    public function __construct()
    {
        $this->subcribe = new subcribe();
    }

    /**
     * All Gallery
     *
     * @return Collection
     */
    public function all(): ?Collection
    {
        return $this->subcribe->all();
    }

    /**
     * Get gallery using id
     *
     * @param int $id
     *
     * @return Gallery
     */
    public function get(int $id): ?subcribe
    {
        return $this->subcribe->find($id);
    }
    /**
     * Get first gallery
     *
     * @return Gallery
     */
    public function getFirst(): ?subcribe
    {
        return $this->subcribe->first();
    }

    /**
     * Make gallery
     *
     * @param array $data
     *
     * @return Gallery
     */
    public function make(array $data)
    {
        return $this->create($data);
    }

    /**
     * Create gallery
     *
     * @param array $data
     *
     * @return Gallery
     */
    public function create(array $data): subcribe
    {
        return $this->subcribe->create($data);
    }

    /**
     * Update Gallery
     *
     * @param Gallery $gallery
     * @param array   $data
     *
     * @return bool
     */
    public function update(subcribe $subcribe, array $data): void
    {
        $subcribe->update($this->edit($subcribe, $data));
    }

    /**
     * Edit Gallery
     *
     * @param Gallery $gallery
     * @param array   $data
     *
     * @return array
     */
    protected function edit(subcribe $subcribe, array $data): array
    {
        return array_merge($subcribe->toArray(), $data);
    }

    /**
     * Delete a gallery
     *
     * @return string
     */
    public function delete(int $id): void
    {
        $subcribe = $this->subcribe->find($id);
        $subcribe->delete();
    }

    /**
     * Update gallery status
     *
     * @param  Gallery $gallery
     *
     * @return void
     */
    public function status(subcribe $subcribe): void
    {
        if ($subcribe['status'] == 0) {
            $data['status'] = 1;
            $this->update($subcribe, $data);
        } else {
            $data['status'] = 0;
            $this->update($subcribe, $data);
        }
    }
}
