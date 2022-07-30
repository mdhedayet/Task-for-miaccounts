<template>
  <section class="category">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h2 class="text-primary">Report Two</h2>
            </div>
            <base-table class="pt-3" v-if="bool">
              <template #row-1 >
                <th data-sortable="">
                  <a href="#" class="dataTable-sorter">Acc Head id</a>
                </th>
              </template>

              <template #row-2>
                <th data-sortable="" >
                  <a href="#" class="dataTable-sorter">G. Lvl 1</a>
                </th>
              </template>
              <template #row-3>
                <th data-sortable="" >
                  <a href="#" class="dataTable-sorter">G. Lvl 2</a>
                </th>
              </template>
              <template #row-4>
                <th data-sortable="" >
                  <a href="#" class="dataTable-sorter">G. Lvl 3</a>
                </th>
              </template>
              <template #row-5>
                <th data-sortable="" >
                  <a href="#" class="dataTable-sorter">Acc Head</a>
                </th>
              </template>
              <template #row-6>
                <th data-sortable="" >
                  <a href="#" class="dataTable-sorter">Total</a>
                </th>
              </template>


              <template #table-row>
                <tr v-for="(item, index) in reportTwos.data.data" :key="index">
                    <td>{{item.id}}</td>
                    <td>{{item.main_level.name}}</td>
                    <td v-if="item.sub_level">{{item.sub_level.name}}</td>
                    <td v-else></td>
                    <td v-if="item.child_level">{{item.child_level.name}}</td>
                    <td v-else></td>
                    <td>{{item.name}}</td>
                    <td>{{item.total_amount}}</td>
                </tr>
              </template>

              <template #table-footer>
                <pagination
                  :data="reportTwos.data"
                  @pagination-change-page="fetchData"
                  :limit="total"
                >
                </pagination>
              </template>
            </base-table>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import axios from 'axios';
import BaseTable from "../components/slots/BaseTable..vue";
export default {
  components: { BaseTable},
  data() {
    return {
      total: 10,
      bool: false,
      reportTwos: [],
      reportTwo:[],
    };
  },
  methods: {
    fetchData(page) {
        axios.get(`/api/report/two/data?page=${page}`).then(response => {
            console.log(response);
            this.reportTwos = response;
            this.reportTwo = response.data;
            this.bool = true;

        }).catch(error => {
            console.log(error);
        });
    },

  },
  created() {
    this.fetchData();
  },
};
</script>

<style scoped>
.category {
  padding: 20px 0;
}
.category a {
  text-decoration: none;
  color: #000;
}
</style>
