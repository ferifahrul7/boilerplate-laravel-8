<template>
  <div class="container-fluid">
    <div class="fade-in">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Dashboard Component</div>

            <div class="card-body">This is dashboard component. {{ data }} </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["data"],
  data() {
    return {
        data:data,
    };
  },
  mounted() {
    console.log(this.data);
  },
};
</script>
