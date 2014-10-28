
import javax.swing.JOptionPane;

 
public class Algoritmo {
   double m,division,divisionnew=0;
   int y=0,w=0,t,n,l;
   int contador1, contador2, contador3;
    
     
 double s[];
 double matriz [];
 
 
    public void pedir(){
        n=Integer.parseInt(JOptionPane.showInputDialog("BIENVENIDO USUARIO DE LA CLASE DE SIMULACION \n¿CUANTOS NUMEROS PSEUDOALEATORIOS QUIERES GENERAR?"));
    }
    //double j [] = new double[n];
    public void Generar() {
 //double[] j = new double[n];
s=new double [n];
        for (int i = 0; i < s.length; i++) {
            s[i] = (double) (Math.random() * 1);
            System.out.println(w+" no PSEUDOALEATORIO = "+s[i] + ",\n");
            w=w+1;
        }
    }
    
    public void PruebaUniformidad (){
        
        int x;
        
        m=Math.sqrt(n);
        m=Math.round(m);
        
        x=(int)m;
        
        matriz= new double [x+1];
        
        
        System.out.println("PRUEBA DE INDEPENDENCIA \n\n EL NUMERO DE INTERVALOS ES :"+ m);
        division=1/m;
        System.out.println("LOS INCREMENTOS SON DE "+division);
        
        for(l=0;divisionnew<=1;l++){
           
            
            
            
            
            matriz[l] = divisionnew;
            System.out.println(y+" intervalo   "+matriz[l] + ",\n");
            
//            System.out.println(" + "+divisionnew);
            divisionnew=divisionnew+division;
            y=y+1;
//            
//            
//          
            
        }
        
        
    }
    
    public void PruebaUniformidad2(){
        
        
for(int a=0;a<=s.length+1;a++){
    
 
    
    
    
    if (s[n]<matriz[l]){
        contador1=contador1+1;   
    }
    else{
        if(s[n]<matriz[l+1]){
            contador2=contador2+1;
        }
    }
        //System.out.println("----"+j[a]);
}

    }
    
    
    
    public void shellSort(int s[])
{
for ( int increment = s.length / 2; increment > 0; increment =
(increment == 2 ? 1 : (int) Math.round(increment / 2.2)))
{
for (int i = increment; i < s.length; i++)
{
for (int j = i; j >= increment && s[j - increment] >
s[j]; j -= increment)
{
int temp = s[j];
s[j] = s[j - increment];
s[j - increment] = temp;
}
}
}
}
}
        
        
        
        
        
        
        
        
    
    

