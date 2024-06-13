import Axios from 'axios';
import { client } from 'laravel-precognition-react';
const api = Axios.create({
  // baseURL: process.env.APP_API_URL,
  baseURL: 'http://127.0.0.1:8000/',

  // headers: {
  //   'X-Requested-With': 'XMLHttpRequest',
  // },
});
client.use(api);
export default api;
