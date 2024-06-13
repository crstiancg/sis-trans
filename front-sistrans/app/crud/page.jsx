'use client';
import {
  Table,
  TableHeader,
  TableColumn,
  TableBody,
  TableRow,
  TableCell,
  Spinner,
  getKeyValue,
  Pagination,
  Input,
  Button,
  useDisclosure,
  Modal,
  ModalContent,
  ModalHeader,
  ModalBody,
  ModalFooter,
  Tooltip,
} from '@nextui-org/react';
import { MdAutoFixHigh, MdEdit, MdDeleteForever } from 'react-icons/md';

import React, { useMemo, useRef, useState } from 'react';
import UbigeoService from '@/services/UbigeoService';
import columns from './columns';
import Form from './form';
export default function CrudPage() {
  const [page, setPage] = useState(1);
  const [rowPerPage, setRowPerPage] = useState(5);
  const [edit, setEdit] = useState(false);
  const [id, setId] = useState(0);

  const { data, mutate, isLoading } = UbigeoService.getData({
    page,
    rowsPerPage: rowPerPage,
    order_by: '-id',
  });
  console.log(data?.last_page);

  const pages = useMemo(() => {
    return data?.last_page;
  }, [data?.total, rowPerPage]);

  // const onSave = async () => {
  //   // await refForm.current.save();
  //   // console.log(refForm.current);
  //   console.log('save fachada');
  //   // mutate();
  //   // onClose();
  // };
  const onSave = () => {
    // setMessage(childData);
    // console.log(childData);
    mutate();
    onClose();
  };

  const loadingState = isLoading || data?.data.legth === 0 ? 'loading' : 'idle';
  const { isOpen, onOpen, onOpenChange, onClose } = useDisclosure();
  const refForm = useRef(null);
  const topContent = React.useMemo(() => {
    return (
      <div className='flex flex-col gap-4'>
        <div className='flex justify-between gap-3 items-end'>
          <Input
            isClearable
            className='w-full sm:max-w-[44%]'
            placeholder='Search by name...'
          />
          <div className='flex gap-3'>
            <Button
              onPress={() => {
                setEdit(false);
                onOpen();
              }}
              color='primary'
              endContent={<MdAutoFixHigh size='1.4em' />}
            >
              Añadir
            </Button>
            <Modal
              isOpen={isOpen}
              onOpenChange={onOpenChange}
              placement='top-center'
            >
              <ModalContent>
                {(onClose) => (
                  <>
                    <Form
                      save={onSave}
                      isEdit={edit}
                      id={id}
                      onClose={onClose}
                      ref={refForm}
                    />
                  </>
                )}
              </ModalContent>
            </Modal>
          </div>
        </div>
        <div className='flex justify-between items-center'>
          <span className='text-default-400 text-small'>
            Total {data?.total} users
          </span>
          <label className='flex items-center text-default-400 text-small'>
            Rows per page:
            <select
              className='bg-transparent outline-none text-default-400 text-small'
              onChange={(e) => {
                setRowPerPage(e.target.value);
              }}
            >
              <option value='5'>5</option>
              <option value='10'>10</option>
              <option value='15'>15</option>
            </select>
          </label>
        </div>
      </div>
    );
  }, [rowPerPage, data?.total, isOpen]);

  const editar = (e) => {
    console.log(e);
    onOpen();
    setEdit(true);
    setId(e.id);
    // const res = await UbigeoService.get(e.id);
    // console.log(res);
  };
  const eliminar = async (e) => {
    console.log(e);
    await UbigeoService.delete(e.id);
    mutate();
  };
  const renderCell = React.useCallback((row, columnKey) => {
    const cellValue = row[columnKey];

    switch (columnKey) {
      case 'id':
        return <p>{cellValue}</p>;
      case 'codigo':
        return <p>{cellValue}</p>;
      case 'tipo':
        return <p>{cellValue}</p>;
      case 'nombre':
        return <p>{cellValue}</p>;
      case 'acciones':
        return (
          <div className='relative flex items-center gap-2'>
            <Tooltip content='Edit user'>
              <span
                onClick={() => editar(row)}
                className='text-lg text-default-400 cursor-pointer active:opacity-50'
              >
                <MdEdit size='1.4em' />
              </span>
            </Tooltip>
            <Tooltip color='danger' content='Delete user'>
              <span
                onClick={() => eliminar(row)}
                className='text-lg text-danger cursor-pointer active:opacity-50'
              >
                <MdDeleteForever size='1.4em' />
              </span>
            </Tooltip>
          </div>
        );
      default:
        return cellValue;
    }
  }, []);

  return (
    <>
      <Table
        aria-label='Example static collection table'
        topContent={topContent}
        bottomContent={
          pages > 0 ? (
            <div className='flex w-full justify-center'>
              <Pagination
                isCompact
                showControls
                showShadow
                color='primary'
                page={page}
                total={pages}
                onChange={(page) => setPage(page)}
              />
            </div>
          ) : null
        }
      >
        <TableHeader columns={columns}>
          {(column) => (
            <TableColumn
              key={column.uid}
              align={column.uid === 'actions' ? 'center' : 'start'}
            >
              {column.name}
            </TableColumn>
          )}
        </TableHeader>
        <TableBody
          items={data?.data ?? []}
          loadingContent={<Spinner />}
          loadingState={loadingState}
        >
          {(item) => (
            <TableRow key={item?.id}>
              {(columnKey) => (
                <TableCell>{renderCell(item, columnKey)}</TableCell>
              )}
            </TableRow>
          )}
        </TableBody>
      </Table>
      {/* <pre>{JSON.stringify(data?.data)}</pre> */}
    </>
  );
}
