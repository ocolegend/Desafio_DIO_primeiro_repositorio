# Pseudo-código usando pensamento computacional

## Média da nota de estudantes, usando repetição para 2 alunos distintos

- Feito no portugol em (12/06/2022)

- _Usando notas de portugues, matemática e história para criar a média global das 3 matérias_

--------------------------------------------------------------------------------------------------
funcao inicio() {

		 real port, mate, hist, port2, mate2, hist2
		escreva("Olá, escreva a nota de portugues do estudante 1: ")
		leia(port)
		escreva("Olá, escreva a nota de matematica do estudante 1: ")
		leia(mate)
		escreva("Olá, escreva a nota de historia do estudante1: ")
		leia(hist)
		
		escreva("Olá, escreva a nota de portugues do estudante 2: ")
		leia(port2)
		escreva("Olá, escreva a nota de matematica do estudante 2: ")
		leia(mate2)
		escreva("Olá, escreva a nota de historia do estudante 2: ")
		leia(hist2)
		
		escreva("média do estudante 1 é: ", media(port, mate, hist))
		escreva("\nmédia do estudante 2 é: ", media(port2, mate2, hist2))
	}
	
	funcao real media(real port2, real mate2, real hist2){
	    retorne (port2+ mate2+ hist2)/3
	}
}

--------------------------------------------------------------------------------------------------

# Considerações

**Com esse pseudo-codigo foi possivel realizar a média de notas de 2 alunos simultaneamente, colocando 
suas respectivas notas**