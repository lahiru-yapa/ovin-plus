<?php

namespace domain\Services\Faq;

use App\Models\Faq;
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
class FaqService
{
    protected $faq;

    public function __construct()
    {
        $this->faq = new Faq();
    }

    /**
     * All Gallery
     *
     * @return Collection
     */
    public function all(): ?Collection
    {
        return $this->faq->all();
    }

    /**
     * Get gallery using id
     *
     * @param int $id
     *
     * @return Gallery
     */
    public function get(int $id): ?faq
    {
        return $this->faq->find($id);
    }
    /**
     * Get first gallery
     *
     * @return Gallery
     */
    public function getFirst(): ?faq
    {
        return $this->faq->first();
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
    public function create(array $data): faq
    {
        return $this->faq->create($data);
    }

    /**
     * Update Gallery
     *
     * @param Gallery $gallery
     * @param array   $data
     *
     * @return bool
     */
    public function update(Faq $faq, array $data): void
    {
        $faq->update($this->edit($faq, $data));
    }

    /**
     * Edit Gallery
     *
     * @param Gallery $gallery
     * @param array   $data
     *
     * @return array
     */
    protected function edit(Faq $faq, array $data): array
    {
        return array_merge($faq->toArray(), $data);
    }

    /**
     * Delete a gallery
     *
     * @return string
     */
    public function delete(int $id): void
    {
        $faq = $this->faq->find($id);
        $faq->delete();
    }

    /**
     * Update gallery status
     *
     * @param  Gallery $gallery
     *
     * @return void
     */
    public function status(Faq $faq): void
    {
        if ($faq['status'] == 0) {
            $data['status'] = 1;
            $this->update($faq, $data);
        } else {
            $data['status'] = 0;
            $this->update($faq, $data);
        }
    }
}
