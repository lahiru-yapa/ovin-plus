<?php

namespace domain\Services\Contact;

use App\Models\Contact;
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
class ContactService
{
    protected $contact;

    public function __construct()
    {
        $this->contact = new Contact();
    }

    /**
     * All Gallery
     *
     * @return Collection
     */
    public function all(): ?Collection
    {
        return $this->contact->all();
    }

    /**
     * Get gallery using id
     *
     * @param int $id
     *
     * @return Gallery
     */
    public function get(int $id): ?contact
    {
        return $this->contact->find($id);
    }
    /**
     * Get first gallery
     *
     * @return Gallery
     */
    public function getFirst(): ?contact
    {
        return $this->contact->first();
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
    public function create(array $data): contact
    {
        return $this->contact->create($data);
    }

    /**
     * Update Gallery
     *
     * @param Gallery $gallery
     * @param array   $data
     *
     * @return bool
     */
    public function update(Contact $contact, array $data): void
    {
        $contact->update($this->edit($contact, $data));
    }

    /**
     * Edit Gallery
     *
     * @param Gallery $gallery
     * @param array   $data
     *
     * @return array
     */
    protected function edit(Contact $contact, array $data): array
    {
        return array_merge($contact->toArray(), $data);
    }

    /**
     * Delete a gallery
     *
     * @return string
     */
    public function delete(int $id): void
    {
        $contact = $this->contact->find($id);
        $contact->delete();
    }

    /**
     * Update gallery status
     *
     * @param  Gallery $gallery
     *
     * @return void
     */
    public function status(Contact $contact): void
    {
        if ($contact['status'] == 0) {
            $data['status'] = 1;
            $this->update($contact, $data);
        } else {
            $data['status'] = 0;
            $this->update($contact, $data);
        }
    }
}
