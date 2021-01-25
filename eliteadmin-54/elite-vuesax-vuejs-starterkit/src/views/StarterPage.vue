<template>
  <div>
    <States />
    <vs-row vs-justify="center">
      <vs-col
        type="flex"
        vs-justify="center"
        vs-align="center"
        vs-lg="6"
        vs-sm="12"
        vs-xs="12"
        code-toggler
      >
        <vs-card class="cardx">
          <div slot="header">
            <h5 class="card-title">Yearly Sales</h5>
          </div>
          <div>
            <YearlySales />
          </div>
        </vs-card>
      </vs-col>

      <vs-col
        type="flex"
        vs-justify="center"
        vs-align="center"
        vs-lg="6"
        vs-sm="12"
        vs-xs="12"
        code-toggler
      >
        <vs-card class="cardx">
          <div slot="header">
            <h5 class="card-title">Sales Difference</h5>
          </div>
          <div>
            <SalesDifference />
          </div>
        </vs-card>
      </vs-col>

      <vs-col vs-lg="12">
        <vs-card>
          <div slot="header">
            <div class="d-flex align-items-center">
              <div>
                <h5 class="card-title">Sales Overview</h5>
                <h6 class="card-subtitle mb-0">Check the monthly sales</h6>
              </div>
              <div class="ml-auto text-right">
                <div>
                  <span class="text-muted">Total Sales</span>
                  <h2 class="text-success mb-0">$3,690</h2>
                </div>
              </div>
            </div>
          </div>
          <SalesOverview />
        </vs-card>
      </vs-col>
    </vs-row>
    <Blogs />
  </div>
</template>

<script>
import YearlySales from "./components/dashboard/YearlySales.vue";
import SalesOverview from "./components/dashboard/SalesOverview.vue";
import States from "./components/dashboard/States.vue";
import Blogs from "./components/dashboard/Blogs.vue";
import SalesDifference from "./components/dashboard/SalesDifference";

export default {
  name: "StarterPage",
  components: {
    YearlySales,
    SalesOverview,
    States,
    Blogs,
    SalesDifference
  }
};
</script>
