<template>
  <div id="app">
        <div id="app">
    <table>
    <tr>
        <th>
            Name
        </th>
        <th>
            Email
        </th>
    </tr>
        <tr v-for="user in users" :key="user">
            <td v-for="fields in user" :key="fields">
                {{ fields }}
            </td>
        </tr>
    </table>
    </div>
  </div>
</template>
<script>
export default {
  name: "App",
  data() {
    return {
      // result set
      users: user
    };
  }
};
</script>

<style>
#app {
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin: 0 auto; 
  padding: 10px;
}

/* table, th, td {
   border: 1px solid black;
} */
th, td {
    border-bottom: 1px solid #ddd;
}
table {
    width: 100%;
}

tr {
    height: 50px;
    text-align: left;
    vertical-align: bottom;
}
tr:nth-child(even) {background-color: #f2f2f2;}
th {
    background-color: #4169E1;
    color: white;
    padding: 15px;
    text-align: left;
}
</style>
