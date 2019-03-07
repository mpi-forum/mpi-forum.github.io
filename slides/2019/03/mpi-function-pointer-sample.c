#include "mpi-object.h"

#include <assert.h>
#include <stdio.h>

int main(int argc, char **argv)
{
	int err;

	MPI_3_Base base;
	err = MPI_Get_base(MPI_3_0, (void *)&base);
	assert(MPI_SUCCESS == err);

	int version, subversion;
	err = base->get_version(&version, &subversion);
	assert(MPI_SUCCESS == err);

	// how is it getting filled without crashing
	MPI_3_Interface MPI3;
	err = base->init(&argc, &argv, &MPI3);
	assert(MPI_SUCCESS == err);

	// hello world
	int rank = -1;
	int size = -1;

	err = MPI3->COMM_WORLD->get_rank(MPI3->COMM_WORLD, &rank);
	assert(MPI_SUCCESS == err);

	err = MPI3->COMM_WORLD->get_size(MPI3->COMM_WORLD, &size);
	assert(MPI_SUCCESS == err);

	printf("Hello from rank %i of %i with version %i_%i.\n", rank, size, version, subversion);
	fflush(stdout);

	// ring
	int payload = -1;
	if(0 == rank)
		payload = 101;

	if(0 == rank)
	{
		MPI3->COMM_WORLD->send(&payload, 1, MPI3->INT, (rank + 1 + size) % size, 0, MPI3->COMM_WORLD);

		printf("rank %i sent %i\n", rank, payload);

		MPI3->COMM_WORLD->recv(&payload, 1, MPI3->INT, (rank - 1 + size) % size, 0, MPI3->COMM_WORLD, MPI_STATUS_IGNORE);

		printf("rank %i received %i\n", rank, payload);
	}
	else
	{
		MPI3->COMM_WORLD->recv(&payload, 1, MPI3->INT, (rank - 1 + size) % size, 0, MPI3->COMM_WORLD, MPI_STATUS_IGNORE);

		printf("rank %i received %i\n", rank, payload);

		payload += 1;
		printf("rank %i incremented payload to %i\n", rank, payload);

		MPI3->COMM_WORLD->send(&payload, 1, MPI3->INT, (rank + 1 + size) % size, 0, MPI3->COMM_WORLD);

		printf("rank %i sent %i\n", rank, payload);
	}

	// finalize interface
	err = base->finalize(&MPI3);
	assert(MPI_SUCCESS == err);

	err = MPI_Free_base(MPI_3_0, (void *)&base);
	assert(MPI_SUCCESS == err);

	return err;
}
