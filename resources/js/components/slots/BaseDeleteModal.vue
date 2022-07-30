<template>
  <div class="modal fade" :id="'exampleModalDelete'+deleteId" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete this!!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <button type="button" class="btn btn-success btn-sm" data-bs-dismiss="modal">Cancle</button>
        <button type="button" class="btn btn-danger btn-sm"  data-bs-dismiss="modal" @click="deleteItem(deleteId)">Delete</button>
      </div>
    </div>
  </div>
</div>
</template>

<script>
export default {
    props:['deleteId'],
    methods: {
        deleteItem(id) {
            this.$emit('deleteModal',id)
        }
    },
}
</script>

<style>

</style>