<template>
  <vs-row>
    <vs-col vs-lg="3" vs-xs="12">
      <vs-card>
        <h3 class="mb-1 font-weight-normal">86%</h3>
        <span class="text-muted">Total Product</span>
        <vs-progress :percent="70" color="success">success</vs-progress>
      </vs-card>
    </vs-col>
    <vs-col vs-lg="3" vs-xs="12">
      <vs-card>
        <h3 class="mb-1 font-weight-normal">40%</h3>
        <span class="text-muted">Pending Product</span>
        <vs-progress :percent="25" color="primary">primary</vs-progress>
      </vs-card>
    </vs-col>
    <vs-col vs-lg="3" vs-xs="12">
      <vs-card>
        <h3 class="mb-1 font-weight-normal">56%</h3>
        <span class="text-muted">Yearly Sales</span>
        <vs-progress :percent="50" color="warning">warning</vs-progress>
      </vs-card>
    </vs-col>
    <vs-col vs-lg="3" vs-xs="12">
      <vs-card>
        <h3 class="mb-1 font-weight-normal">30%</h3>
        <span class="text-muted">Company Growth</span>
        <vs-progress :percent="78" color="dark">dark</vs-progress>
      </vs-card>
    </vs-col>
  </vs-row>
</template>
<script>
export default {
  name: "States"
};
</script>