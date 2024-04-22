<template>
    <div>
        <h1>Lista de Produtos</h1>

        <!-- Campos de busca -->
        <div>
            <label for="searchName">Nome:</label>
            <input type="text" id="searchName" v-model="searchName">
        </div>
        <div>
            <label for="searchDescription">Descrição:</label>
            <input type="text" id="searchDescription" v-model="searchDescription">
        </div>

        <ul>
            <!-- Renderização dos produtos filtrados -->
            <li v-for="produto in produtosFiltrados" :key="produto.id">
                <div>
                    <img :src="produto.imagem" alt="Imagem do Produto" style="width: 100px; height: auto;">
                </div>
                <div>
                    <p>Nome: {{ produto.nome }}</p>
                    <p>Preço: {{ produto.preco }}</p>
                    <p>Data de Validade: {{ produto.dataValidade }}</p>
                    <p>Categoria: {{ produto.categoria }}</p>
                </div>
                <div>
                    <button @click="editarProduto(produto)">Editar</button>
                    <button @click="excluirProduto(produto.id)">Excluir</button>
                </div>
            </li>
        </ul>
    </div>
</template>
  
<script setup lang="ts">
import { ref, computed, onMounted } from 'vue';
import axios from 'axios';
import { useRouter } from 'vue-router';

// Interface Produto
interface Produto {
    id: number;
    nome: string;
    preco: number;
    dataValidade: string;
    imagem: string;
    categoria: string;
}

// Lista de produtos
const produtos = ref<Produto[]>([]);

// Campos de busca
const searchName = ref('');
const searchDescription = ref('');

// Função para buscar os produtos na API
const fetchProdutos = async () => {
    try {
        const response = await axios.get('/produtos');
        produtos.value = response.data;
    } catch (error) {
        console.error('Erro ao buscar os produtos:', error);
    }
};

// Função para editar um produto
const router = useRouter();
const editarProduto = (produto: Produto) => {
    router.push(`/product-edit/${produto.id}`);
};

// Função para excluir um produto
const excluirProduto = async (produtoId: number) => {
    try {
        await axios.delete(`/produtos/${produtoId}`);
        produtos.value = produtos.value.filter(produto => produto.id !== produtoId);
    } catch (error) {
        console.error('Erro ao excluir o produto:', error);
    }
};

// Propriedade computada para filtrar os produtos
const produtosFiltrados = computed(() => {
    return produtos.value.filter(produto => {
        return (
            (searchName.value === '' || produto.nome.toLowerCase().includes(searchName.value.toLowerCase())))
            // Comentei a linha abaixo para remover a referência à propriedade 'descricao'
            // (searchDescription.value === '' || produto.descricao.toLowerCase().includes(searchDescription.value.toLowerCase()))
            ;
    });
});

// Busca os produtos ao montar o componente
onMounted(fetchProdutos);
</script>
