#include <stdio.h>

void search(){

	int array[50],i,location,find,size;
	printf("\n Enter the Size Of Array:");
	scanf("%d",&size);

	printf("\n Enter the Element In Array:");
	for(i=0; i<size; i++){
		scanf("%d",&array[i]);
	}

	printf("\n Enter the  Value Which You Want To Find");
	scanf("%d",&find);
	for(i=0; i<size; i++){
		if(array[i] == find){

			printf("\nIndex:%d Value %d",i,find);

		}
	}
}

int main(){
	search();

	return 0;
}