<template>
  <section class="category">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h2 class="text-primary">Report One</h2>
            </div>
            <base-table class="pt-3" v-if="bool">
              <template #row-1 >
                <th data-sortable="" colspan="4">
                  <a href="#" class="dataTable-sorter">Group Group/Heads </a>
                </th>
              </template>

              <template #row-2>
                <th data-sortable="" style="width:220px">
                  <a href="#" class="dataTable-sorter">Total amounts</a>
                </th>
              </template>


              <template #table-row>
                <template v-for="gData in reportOnes.data.data">
                    <tr>
                        <td>{{gData.name}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>{{gData.all_total_amount}}</td>
                    </tr>
                    <template v-for="subData in gData.sub_level">
                        <tr>
                        <td></td>
                        <td>{{subData.name}}</td>
                        <td></td>
                        <td></td>
                        <td>{{subData.all_total_amount}}</td>
                        </tr>
                        <template v-if="subData.child_level != []">
                            <template v-for="subSubData in subData.account_head">
                                <tr>
                                <td></td>
                                <td></td>
                                <td>{{subSubData.name}}</td>
                                <td></td>
                                <td>{{subSubData.total_amount}}</td>
                                </tr>
                            </template>
                        </template>
                        <template v-for="subSubData in subData.child_level">
                            <tr>
                            <td></td>
                            <td></td>
                            <td>{{subSubData.name}}</td>
                            <td></td>
                            <td>{{subSubData.all_total_amount}}</td>
                            </tr>
                                    <template v-for="subSubData in subSubData.account_head">
                                        <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>{{subSubData.name}}</td>
                                        <td>{{subSubData.total_amount}}</td>
                                        </tr>
                                    </template>
                        </template>
                    </template>
                    <template v-if="gData.sub_level != []">
                            <template v-for="subSubData in gData.account_head">
                                <tr>
                                <td></td>
                                <td>{{subSubData.name}}</td>
                                <td></td>
                                <td></td>
                                <td>{{subSubData.total_amount}}</td>
                                </tr>
                            </template>
                        </template>
                </template>
              </template>

              <template #table-footer>
                <pagination
                  :data="reportOnes.data"
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
      reportOnes: [],
      reportOne:[],
    };
  },
  methods: {
    fetchData(page) {
        axios.get(`/api/report/one/data?page=${page}`).then(response => {
            console.log(response);
            this.reportOnes = response;
            this.reportOne = response.data;
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
