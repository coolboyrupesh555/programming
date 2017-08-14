#include <stdio.h>

void exlogic(){
	
	int array[50],i,find,size,temp,index;
	printf("\n Enter the Size Of Array max(50)");
	scanf("%d",&size);
	
	printf("\n Enter the Element In Array:");
	for(i=0; i<size; i++){
		scanf("%d",&array[i]);
	}
	
	printf("\n Enter the Value Which YOu Want To find\n");
	scanf("%d",&find);
	
	for(i=0; i<size; i++){
		
		if(array[i] == find){
			temp = find;
			index = i;
			break;
		}
		
		}
		
	if(temp  == find){
		
		printf("the index of that element is :%d\n,%d",index,find);		
	}else{
		printf("Match is not found Try Again");
	}

}

int main(){
	exlogic();
	
	return 0;
}
