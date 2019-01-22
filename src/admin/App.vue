<template>
  <div id="app"><IView /></div>
</template>

<script>
import IView from "./views/IView";
export default {
  components: { IView },

  data: () => ({
    drawer: null
  })
};
</script>

<style lang="scss" scoped>
// * {
//   color: white;
// }
</style>
