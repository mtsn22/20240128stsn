<?php

namespace App\Policies;

use App\Models\User;
use App\Models\KelasSantri;
use Illuminate\Auth\Access\HandlesAuthorization;

class KelasSantriPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_kelas::santri');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\KelasSantri  $kelasSantri
     * @return bool
     */
    public function view(User $user, KelasSantri $kelasSantri): bool
    {
        return $user->can('view_kelas::santri');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function create(User $user): bool
    {
        return $user->can('create_kelas::santri');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\KelasSantri  $kelasSantri
     * @return bool
     */
    public function update(User $user, KelasSantri $kelasSantri): bool
    {
        return $user->can('update_kelas::santri');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\KelasSantri  $kelasSantri
     * @return bool
     */
    public function delete(User $user, KelasSantri $kelasSantri): bool
    {
        return $user->can('delete_kelas::santri');
    }

    /**
     * Determine whether the user can bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_kelas::santri');
    }

    /**
     * Determine whether the user can permanently delete.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\KelasSantri  $kelasSantri
     * @return bool
     */
    public function forceDelete(User $user, KelasSantri $kelasSantri): bool
    {
        return $user->can('force_delete_kelas::santri');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_kelas::santri');
    }

    /**
     * Determine whether the user can restore.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\KelasSantri  $kelasSantri
     * @return bool
     */
    public function restore(User $user, KelasSantri $kelasSantri): bool
    {
        return $user->can('restore_kelas::santri');
    }

    /**
     * Determine whether the user can bulk restore.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_kelas::santri');
    }

    /**
     * Determine whether the user can replicate.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\KelasSantri  $kelasSantri
     * @return bool
     */
    public function replicate(User $user, KelasSantri $kelasSantri): bool
    {
        return $user->can('replicate_kelas::santri');
    }

    /**
     * Determine whether the user can reorder.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_kelas::santri');
    }

}
