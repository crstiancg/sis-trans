import {
  Button,
  Input,
  ModalBody,
  ModalFooter,
  ModalHeader,

} from '@nextui-org/react';
import { forwardRef, useEffect, useImperativeHandle, useState } from 'react';
import { useForm } from 'laravel-precognition-react';
import UbigeoService from '@/services/UbigeoService';
const Form = forwardRef(({ save, isEdit, id, onClose }, ref) => {
  // useImperativeHandle(ref, () => {
  //   return {
  //     save,
  //   };
  // });

  const form = isEdit
    ? useForm('put', 'http://sis-trans.test/api/ubigeos/' + id, {
        id: 0,
        codigo: '',
        tipo: '',
        cod_dep: '',
        cod_prov: '',
        cod_dist: '',
        nombre: '',
      })
    : useForm('post', 'http://sis-trans.test/api/ubigeos', {
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
    form.setData(res);
  };

  const onSave = async (event) => {
    event.preventDefault();
    // const res = await UbigeoService.save(form);
    // console.log('save', res);
    form
      .submit()
      .then(() => {
        // alert('exito');
        save();
      })
      .catch((e) => {
        alert(e);
      });
  };
  return (
    <>
      <form ref={ref} onSubmit={onSave} className='flex flex-col gap-2'>
        <ModalHeader className='flex flex-col gap-1'>
          {isEdit ? `Editar ${form.data.nombre}` : 'Agregar'}
        </ModalHeader>
        <ModalBody>
          <Input
            autoFocus
            label='Codigo'
            placeholder='Ingresa'
            labelPlacement='outside'
            type='text'
            variant='bordered'
            value={form.data.codigo}
            color={form.invalid('codigo') ? 'danger' : 'success'}
            onValueChange={(e) => form.setData('codigo', e)}
            onBlur={() => form.validate('codigo')}
            isInvalid={form.invalid('codigo')}
            errorMessage={form.errors.codigo}
          />
          <Input
            label='Tipo'
            placeholder='Enter your password'
            labelPlacement='outside'
            type='text'
            variant='bordered'
            value={form.data.tipo}
            color={form.invalid('tipo') ? 'danger' : 'success'}
            onValueChange={(e) => form.setData('tipo', e)}
            onBlur={() => form.validate('tipo')}
            isInvalid={form.invalid('tipo')}
            errorMessage={form.errors.tipo}
          />
          <Input
            label='Cod. Departamento'
            placeholder='Enter your password'
            labelPlacement='outside'
            type='text'
            variant='bordered'
            value={form.data.cod_dep}
            color={form.invalid('cod_dep') ? 'danger' : 'success'}
            onValueChange={(e) => form.setData('cod_dep', e)}
            onBlur={() => form.validate('cod_dep')}
            isInvalid={form.invalid('cod_dep')}
            errorMessage={form.errors.cod_dep}
          />
          <Input
            label='Cod. Provincia'
            placeholder='Enter your password'
            labelPlacement='outside'
            type='text'
            variant='bordered'
            value={form.data.cod_prov}
            color={form.invalid('cod_prov') ? 'danger' : 'success'}
            onValueChange={(e) => form.setData('cod_prov', e)}
            onBlur={() => form.validate('cod_prov')}
            isInvalid={form.invalid('cod_prov')}
            errorMessage={form.errors.cod_prov}
          />
          <Input
            label='Cod. Distrito'
            placeholder='Enter your password'
            labelPlacement='outside'
            type='text'
            variant='bordered'
            value={form.data.cod_dist}
            color={form.invalid('cod_dist') ? 'danger' : 'success'}
            onValueChange={(e) => form.setData('cod_dist', e)}
            onBlur={() => form.validate('cod_dist')}
            isInvalid={form.invalid('cod_dist')}
            errorMessage={form.errors.cod_dist}
          />
          <Input
            label='Nombre'
            placeholder='Enter your password'
            labelPlacement='outside'
            type='text'
            variant='bordered'
            value={form.data.nombre}
            color={form.invalid('nombre') ? 'danger' : 'success'}
            onValueChange={(e) => form.setData('nombre', e)}
            onBlur={() => form.validate('nombre')}
            isInvalid={form.invalid('nombre')}
            errorMessage={form.errors.nombre}
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
