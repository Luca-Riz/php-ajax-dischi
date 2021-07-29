const app = new Vue({
  el: '#app',
  data: {
    url: 'api/api-cds.php',
    cds: ''
  },
  mounted() {
    axios
      .get(this.url)
      .then(response => {
        this.cds = (response.data);
      })
      .catch(error => {
        console.log(error);
      })
  },
})