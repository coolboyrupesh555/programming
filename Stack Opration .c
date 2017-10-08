/*
Opration into stack..


*/
#include <stdio.h>
#include <stdlib.h>
#define SIZE 100

struct Stack{
	int top;
	int item[SIZE];
};
struct Stack s1;

void push(){
	if(s1.top == SIZE-1){
		printf("\n Stack OverFlow");
	}else{
		int value;
		printf("\n Enter The Value");
		scanf("%d",&value);
		s1.top++;
		s1.item[s1.top]=value;
	}
}

void Peek(){
	if(s1.top == -1){
		printf("Stack is Empty\n");
	}else{
		int value;
		value=s1.item[s1.top];
		printf("\n The Top Element In Stack:%d\n",value);		
	}
}

void display(){
	if(s1.top == -1){
		printf("\n Stack is Empty");
	}else{
		int i;
		for(i=s1.top; i>=0; i--){
			printf("\n %d",s1.item[i]);
		}
	}
}

void pop(){
	if(s1.top == -1){
		printf("\n Stack is Empty");
	}else{
		int value;
		value= s1.item[s1.top];
		s1.top--;
		printf("Deleted Value is : %d",value);
	}
}


int main(){
	
	s1.top == -1;
	printf("\n*************************************************\n");
	printf("1> Push The Element into Stack\n");
	printf("2> Pop Element from Stack\n");
	printf("3> Display Element From Stack\n");
	printf("4> Peek Top Element From Stack\n");
	printf("5> Exit()\n");
	printf("\n*************************************************\n");
	
	while(1){
		printf("\n Enter the Choice:");
		int useroption;
		scanf("%d",&useroption);
		switch(useroption){
		case 1:
		push();
		break;
		case 2:
		pop();
		break;
		case 3:
		display();
		break;
		case 4:
		Peek();
		break;
		case 5:
		exit(0);
		default:
		printf("\n Invalid Option\n");
		break;
	}
	}
	return 0;
}
