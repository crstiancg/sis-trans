import Axios from 'axios';
import { client } from 'laravel-precognition-react';
const api = Axios.create({
  // baseURL: process.env.APP_API_URL,
  baseURL: 'http://sis-trans.test/',

  // headers: {
  //   'X-Requested-With': 'XMLHttpRequest',
  // },
});
client.use(api);
export default api;
