import {
  Button,
  Input,
  ModalBody,
  ModalFooter,
  ModalHeader,
} from '@nextui-org/react';
import { forwardRef, useEffect, useImperativeHandle, useState } from 'react';


import UbigeoService from '@/services/UbigeoService';
const Form = forwardRef(({ save, isEdit, id, onClose }, ref) => {
  // useImperativeHandle(ref, () => {
  //   return {
  //     save,
  //   };
  // });

  const [form, setForm] = useState({
    id: 0,
    codigo: '',
    tipo: '',
    cod_dep: '',
    cod_prov: '',
    cod_dist: '',
    nombre: '',
  });

  useEffect(() => {
    console.log('esedit', isEdit);
    if (isEdit) {
      ubigeo(id);
    }
  }, []);

  const ubigeo = async (id) => {
    // console.log('xddd', id);
    const res = await UbigeoService.get(id);
    setForm(res);
  };

  const onSave = async (event) => {
    event.preventDefault();
    const res = await UbigeoService.save(form);
    console.log('save', res);
    save();
  };
  return (
    <>
      <form ref={ref} onSubmit={onSave} className='flex flex-col gap-2'>
        <ModalHeader className='flex flex-col gap-1'>
          {isEdit ? `Editar ${form.nombre}` : 'Agregar'}
        </ModalHeader>
        <ModalBody>
          <Input
            autoFocus
            label='Codigo'
            placeholder='Ingresa'
            labelPlacement='outside'
            type='text'
            variant='bordered'
            value={form.codigo}
            onChange={(e) => {
              setForm({ ...form, codigo: e.target.value });
            }}
          />
          <Input
            label='Tipo'
            placeholder='Enter your password'
            labelPlacement='outside'
            type='text'
            variant='bordered'
            value={form.tipo}
            onChange={(e) => {
              setForm({ ...form, tipo: e.target.value });
            }}
          />
          <Input
            label='Cod. Departamento'
            placeholder='Enter your password'
            labelPlacement='outside'
            type='text'
            variant='bordered'
            value={form.cod_dep}
            onChange={(e) => setForm({ ...form, cod_dep: e.target.value })}
          />
          <Input
            label='Cod. Provincia'
            placeholder='Enter your password'
            labelPlacement='outside'
            type='text'
            variant='bordered'
            value={form.cod_prov}
            onChange={(e) => {
              setForm({ ...form, cod_prov: e.target.value });
            }}
          />
          <Input
            label='Cod. Distrito'
            placeholder='Enter your password'
            labelPlacement='outside'
            type='text'
            variant='bordered'
            value={form.cod_dist}
            onChange={(e) => {
              setForm({ ...form, cod_dist: e.target.value });
            }}
          />
          <Input
            label='Nombre'
            placeholder='Enter your password'
            labelPlacement='outside'
            type='text'
            variant='bordered'
            value={form.nombre}
            onChange={(e) => {
              setForm({ ...form, nombre: e.target.value });
            }}
          />
        </ModalBody>
        <ModalFooter>
          <Button color='danger' variant='flat' onPress={onClose}>
            Cerrar
          </Button>
          <Button color='primary' type='submit'>
            Guardar
          </Button>
        </ModalFooter>
      </form>
      {/* <pre>{JSON.stringify(form, null, 2)}</pre> */}
    </>
  );
});
export default Form;
