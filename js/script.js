const app = new Vue({
  el: '#app',
  data: {
    url: 'api/api-cds.php'
  },
  mounted() {
    axios
      .get(this.url)
      .then(response => {
        console.log(response.data);
      })
      .catch(error => {
        console.log(error);
      })
  },
})