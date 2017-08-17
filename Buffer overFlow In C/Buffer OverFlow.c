#include <stdio.h>
#include <string.h>
/*
To Avoid This Attack use scanf but dont use gets
Thanks :-)
*/


int main(void)
{
    char buff[15];
    int pass = 0;

    printf("\n Enter the password : \n");
    gets(buff);

    if(strcmp(buff, "rupeshhere"))
    {
        printf ("\n Wrong Password \n");
    }
    else
    {
        printf ("\n Correct Password \n");
        pass = 1;
    }

    if(pass)
    {
      
        printf ("\n Root privileges given to the user \n");
    }

    return 0;
}
