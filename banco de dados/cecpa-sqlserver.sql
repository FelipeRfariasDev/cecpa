CREATE TABLE [dbo].[coordenacao](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[nome] [nchar](100) NULL
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[funcao](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[nome] [nchar](100) NULL
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[funcionarios](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[nome] [nchar](100) NULL,
	[matricula] [nchar](30) NULL,
	[endereco] [nchar](255) NULL,
	[email] [nchar](100) NULL,
	[telefone] [nchar](500) NULL,
	[coordenacao_id] [int] NULL,
	[funcao_id] [int] NULL
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[usuarios](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[nome] [nchar](100) NULL,
	[email] [nchar](100) NULL,
	[senha] [nchar](50) NULL
) ON [PRIMARY]
GO