<template>
  <!-- <div

  > -->

    <div class="table_padding">
      <table  class="table text-center table-bordered" >
        <thead>
          <tr>
            <slot name="row-1"></slot>
            <slot name="row-2"></slot>
            <slot name="row-3"></slot>
            <slot name="row-4"></slot>
            <slot name="row-5"></slot>
            <slot name="row-6"></slot>
            <slot name="row-7"></slot>
            <slot name="row-8"></slot>
            <slot name="row-9"></slot>
            <slot name="row-10"></slot>
            <slot name="row-11"></slot>
            <slot name="row-12"></slot>
            <slot name="row-13"></slot>
            <slot name="row-14"></slot>
          </tr>
        </thead>

        <tbody>
          <slot name="table-row"></slot>
        </tbody>
         <slot name="table-row-2"></slot>
      </table>
      <slot name="table-footer"></slot>
    </div>
    <!-- <slot name="pagi"></slot> -->
  <!-- </div> -->
</template>

<script>
export default {

}
</script>

<style scoped>
.table > :not(:first-child), .dataTable-table > :not(:first-child) {
    border-top: 1px solid currentColor;
}

.table > :not(:first-child), .dataTable-table > :not(:first-child) {
    border: 1px solid #e0e5ec;
}

.table_padding{
  padding:0 34px
}
</style>
