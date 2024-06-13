import api from '@/lib/axios';
import useSWR from 'swr';

class UbigeoService {
  static getData(params = {}) {
    return useSWR(['api/ubigeos', params], async ([url, params]) => {
      return (await api.get(url, { params })).data;
    });
  }

  static async get(id) {
    return (await api.get(`api/ubigeos/${id}`)).data;
  }

  static async save(reg) {
    if (reg.id === undefined || reg.id === null || reg.id === 0) {
      return (await api.post('/api/ubigeos', reg)).data;
    } else {
      return (await api.put(`/api/ubigeos/${reg.id}`, reg)).data;
    }
  }

  static async delete(id) {
    return await api.delete(`api/ubigeos/${id}`);
  }
}
export default UbigeoService;
