from tkinter import*
'''Support Open Source '''

window = Tk()
everywhere = ""
equation = StringVar()
calculation = Label(window,textvariable=equation)

equation.set("Enter You Number")
calculation.grid(columnspan = 4)


'''This is Created By Rupesh Rajbhar This is Open Source Project
     To Support Open Source Community'''


def  btnPress(num):
     global everywhere
     everywhere = everywhere + str(num)
     equation.set(everywhere)

def Equal():
     global everywhere
     total = str(eval(everywhere))
     equation.set(total)
     everywhere = ""

def clr():
     global everywhere
     everywhere = " "
     equation.set(" ")

Button0 = Button(window, text="0", command = lambda: btnPress(0))
Button0.grid(row=1, column=0)

Button1 = Button(window, text="1",command= lambda:btnPress(1))
Button1.grid(row=1, column=1)

Button2 = Button(window, text="2", command = lambda:btnPress(2))
Button2.grid(row=1, column=2)

Button3=Button(window,text="3",command=lambda: btnPress(3))
Button3.grid(row=1, column=3)

Button4 = Button(window, text="4" ,command= lambda: btnPress(4))
Button4.grid(row=2, column=0)

Button5 = Button(window, text="5",  command= lambda:btnPress(5))
Button5.grid(row=2, column=1)

Button6 = Button(window, text="6", command=lambda:btnPress(6))
Button6.grid(row=2, column=2)

Button7 = Button(window, text="7", command=lambda:btnPress(7))
Button7.grid(row = 2, column=3)

Button8 = Button(window, text="8", command= lambda:btnPress(8))
Button8.grid(row=3, column=0)

Button9 = Button(window, text="9", command=lambda:btnPress(9))
Button9.grid(row=3, column=1)

Add = Button(window, text="+", command=lambda:btnPress("+"))                
Add.grid(row=3, column=2)

Sub =  Button(window, text="-", command=lambda:btnPress("-"))
Sub.grid(row=3, column=3)

Multi = Button(window, text="X", command=lambda:btnPress("*"))
Multi.grid(row=4, column=0)

Dvide = Button(window, text="/", command=lambda:btnPress("/"))
Dvide.grid(row=4, column=1)

Equal = Button(window, text="=", command=Equal)
Equal.grid(row=4, column=2)

Clear = Button(window, text="c" ,command=clr)
Clear.grid(row=4, column=3)


window.mainloop()
